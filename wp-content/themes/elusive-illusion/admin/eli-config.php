<?php

/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */

if (!class_exists('Redux')) {
  return;
}

class ELI_Config {

  var $opt_name = "eli_options";
  var $theme;
  var $args;
  var $media_url;

  function __construct() {
    $this->theme = wp_get_theme();
    $this->media_url = ELUSICVE_THEME_ADMIN_URI . 'images/';
    $this->opt_name = apply_filters('eli_admin_options', $this->opt_name);

    $this->addActions();
    $this->setArgs();
    $this->init();
    $this->addFilters();
  }

  public function addActions() {
    add_action("redux/extensions/{$this->opt_name}/before", array($this, 'addExtensions'), 0);
    add_action('admin_enqueue_scripts', array($this, 'scripts'));
  }

  public function addFilters() {
    
  }

  public function init() {
    Redux::setArgs($this->opt_name, $this->args);
    $sections = $this->addSections();
    Redux::setSections($this->opt_name, $sections);
  }

  public function setArgs() {
    $this->args = array(
      'opt_name' => $this->opt_name,
      'display_name' => $this->theme->get('Name'),
      'display_version' => $this->theme->get('Version'),
      'menu_type' => 'menu',
      'allow_sub_menu' => true,
      'menu_title' => __('Theme Options', ELUSICVE_THEME_LAN),
      'page_title' => __('Theme Options', ELUSICVE_THEME_LAN),
      'google_api_key' => '',
      'google_update_weekly' => false,
      'async_typography' => true,
      'admin_bar' => true,
      'admin_bar_icon' => 'dashicons-admin-tools',
      'admin_bar_priority' => 50,
      'global_variable' => '',
      'dev_mode' => FALSE,
      'update_notice' => FALSE,
      'customizer' => true,
      'page_priority' => 50,
      'page_parent' => 'themes.php',
      'page_permissions' => 'manage_options',
      'menu_icon' => $this->media_url . 'theme-options.png',
      'last_tab' => '',
      'page_icon' => 'dashicons-admin-customizer',
      'page_slug' => 'eli-options',
      'save_defaults' => false,
      'default_show' => false,
      'default_mark' => '',
      'show_import_export' => true,
      'transient_time' => 60 * MINUTE_IN_SECONDS,
      'output' => true,
      'output_tag' => true,
      'footer_credit' => '',
      'database' => '',
      'hints' => array(
        'icon' => 'el el-question-sign',
        'icon_position' => 'right',
        'icon_color' => 'lightgray',
        'icon_size' => 'normal',
        'tip_style' => array(
          'color' => 'red',
          'shadow' => true,
          'rounded' => false,
          'style' => '',
        ),
        'tip_position' => array(
          'my' => 'top left',
          'at' => 'bottom right',
        ),
        'tip_effect' => array(
          'show' => array(
            'effect' => 'slide',
            'duration' => '500',
            'event' => 'mouseover',
          ),
          'hide' => array(
            'effect' => 'slide',
            'duration' => '500',
            'event' => 'click mouseleave',
          ),
        ),
      )
    );

// ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.
    $this->args['admin_bar_links'][] = array(
      'id' => 'redux-docs',
      'href' => 'http://docs.reduxframework.com/',
      'title' => __('Documentation', 'redux-framework-demo'),
    );

    $this->args['admin_bar_links'][] = array(
      //'id'    => 'redux-support',
      'href' => 'https://github.com/ReduxFramework/redux-framework/issues',
      'title' => __('Support', 'redux-framework-demo'),
    );

    $this->args['admin_bar_links'][] = array(
      'id' => 'redux-extensions',
      'href' => 'reduxframework.com/extensions',
      'title' => __('Extensions', 'redux-framework-demo'),
    );

// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
    $this->args['share_icons'][] = array(
      'url' => 'https://github.com/ReduxFramework/ReduxFramework',
      'title' => 'Visit ReduxFramework on GitHub',
      'icon' => 'el el-github'
        //'img'   => '', // You can use icon OR img. IMG needs to be a full URL.
    );
    $this->args['share_icons'][] = array(
      'url' => 'https://www.facebook.com/illusivedesign',
      'title' => 'Like us on Facebook',
      'icon' => 'el el-facebook'
    );
    $this->args['share_icons'][] = array(
      'url' => 'https://twitter.com/iLLusiveDesign2',
      'title' => 'Follow us on Twitter',
      'icon' => 'el el-twitter'
    );
    $this->args['share_icons'][] = array(
      'url' => 'https://www.linkedin.com/pub/illusive-design/8a/7a4/951',
      'title' => 'Find us on LinkedIn',
      'icon' => 'el el-linkedin'
    );
    $this->args['share_icons'][] = array(
      'url' => 'https://www.youtube.com/channel/UC4vJqSU7BdgR19t16Y8xMJA',
      'title' => 'Find us on Youtube',
      'icon' => 'el el-youtube'
    );
    // Panel Intro text -> before the form
    if (!isset($this->args['global_variable']) || $this->args['global_variable'] !== false) {
      if (!empty($this->args['global_variable'])) {
        $v = $this->args['global_variable'];
      }
      else {
        $v = str_replace('-', '_', $this->args['opt_name']);
      }
      $this->args['intro_text'] = sprintf(__('<p>To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', ELUSICVE_THEME_LAN), $v);
    }
    else {
      $this->args['intro_text'] = __('<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', ELUSICVE_THEME_LAN);
    }

    // Add content after the form.
    $this->args['footer_text'] = __("<p>&copy;2015 Modified by <a href=\"{$this->theme->ThemeURI}\">{$this->theme->Author}</a></p>", ELUSICVE_THEME_LAN);
  }

  public function addSections() {
    $sections[] = $this->optionBasic();
    $sections[] = $this->optionHeader();
    $sections[] = $this->optionInnerContent();
    $sections[] = $this->optionFooter();
    $sections[] = $this->optionSocial();
    $sections[] = $this->optionTweet();

    return apply_filters('add_eli_theme_option', $sections);
  }

  function optionBasic() {
    $fields = array(
      array(
        'id' => 'show_logo',
        'type' => 'switch',
        'title' => __('Show Logo', ELUSICVE_THEME_LAN),
        'subtitle' => __('Others showing site title.', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'logo_url',
        'type' => 'media',
        'url' => true,
        'title' => __('Logo', ELUSICVE_THEME_LAN),
        'compiler' => 'true',
        //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
        'desc' => __('Basic media uploader with disabled URL input field.', ELUSICVE_THEME_LAN),
        'default' => array('url' => $this->media_url . 'logo.png'),
        'required' => array('show_logo', '=', '1'),
      ),
      array(
        'id' => 'show_logo_sx',
        'type' => 'switch',
        'title' => __('Enable Mobile Logo', ELUSICVE_THEME_LAN),
        'subtitle' => __('In small device  show a alternative Logo', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'logo_url_sx',
        'type' => 'media',
        'url' => true,
        'title' => __('Logo', ELUSICVE_THEME_LAN),
        'compiler' => 'true',
        //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
        'desc' => __('Basic media uploader with disabled URL input field.', ELUSICVE_THEME_LAN),
        'default' => array('url' => $this->media_url . 'logo-sm.png'),
        'required' => array('show_logo_sx', '=', '1'),
      ),
      array(
        'id' => 'show_tagline',
        'type' => 'switch',
        'title' => __('Show Tagline', ELUSICVE_THEME_LAN),
        'default' => FALSE,
      ),
      array(
        'id' => 'custom_favicon',
        'type' => 'media',
        'url' => true,
        'title' => __('Custom Favicon Icon', ELUSICVE_THEME_LAN),
        'default' => array('url' => $this->media_url . 'favicon.ico'),
        'preview' => false,
      ),
      array(
        'id' => 'show_browserupgrade',
        'type' => 'switch',
        'title' => __('Show Browser Upgrade Message', ELUSICVE_THEME_LAN),
        'subtitle' => __('If Someone use Old Browser like IE6,IE7..', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
    );
    return array(
      'title' => __('Basic Fields', ELUSICVE_THEME_LAN),
      'id' => 'eli-basic',
      'desc' => __('', ELUSICVE_THEME_LAN),
      'customizer_width' => '400px',
      'icon' => 'el el-home',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/eli-basic/fields', $fields),
    );
  }

  function optionHeader() {
    $fields = array(
      array(
        'id' => 'mobile_menu_theme',
        'type' => 'image_select',
        'title' => __('Mobile Menu Theme', 'mclinic'),
        'options' => Array(
          'theme-ffffff' => $this->media_url . '/patterns/ffffff.png',
          'theme-000000' => $this->media_url . '/patterns/000000.png',
          'theme-333333' => $this->media_url . '/patterns/333333.png',
          'theme-ff0000' => $this->media_url . '/patterns/ff0000.png',
          'theme-6cb543' => $this->media_url . '/patterns/6cb543.png',
          'theme-193874' => $this->media_url . '/patterns/193874.png',
        ),
        'default' => 'theme-ffffff',
      ),
      array(
        'id' => 'show_subtitle',
        'type' => 'switch',
        'title' => __('Show Subtitle', ELUSICVE_THEME_LAN),
        'subtitle' => __('Show subtitle below page title', ELUSICVE_THEME_LAN),
        'default' => false,
      ),
    );
    return array(
      'title' => __('Page Header', ELUSICVE_THEME_LAN),
      'id' => 'theme-header-otions',
      'icon' => 'el el-th-large',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/header/fields', $fields),
        //'subsection' => TRUE,
    );
  }

  function optionInnerContent() {
    $fields = array(
      array(
        'id' => 'default_page_banner',
        'type' => 'media',
        'url' => true,
        'title' => __('Default Banner', ELUSICVE_THEME_LAN),
        'compiler' => 'true',
        //'mode'      => false, // Can be set to false to allow any media type, or can also be set to any mime type.
        'desc' => __('Upload a image with .jpeg with maximum low resolution minimum size 1920X190 px', ELUSICVE_THEME_LAN),
        'default' => array('url' => $this->media_url . 'default-banner.jpg'),
      ),
      array(
        'id' => 'show_subtitle',
        'type' => 'switch',
        'title' => __('Show Subtitle', ELUSICVE_THEME_LAN),
        'subtitle' => __('Show subtitle below page title', ELUSICVE_THEME_LAN),
        'default' => false,
      ),
    );
    return array(
      'title' => __('Page Inner', ELUSICVE_THEME_LAN),
      'id' => 'theme-optioninner-content',
      'icon' => 'el el-th-large',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/inner-content/fields', $fields),
        //'subsection' => TRUE,
    );
  }

  function optionFooter() {
    $fields = array(
      array(
        'id' => 'show_footer_nav',
        'type' => 'switch',
        'title' => __('Show Footer Navigation', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'show_footer_widgets',
        'type' => 'switch',
        'title' => __('Show Footer Widgets', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'footer_widgets_count',
        'type' => 'text',
        'title' => __('Show Footer Widgets', ELUSICVE_THEME_LAN),
        'default' => 2,
      ),
      array(
        'id' => 'site_copyright',
        'type' => 'editor',
        'title' => __('Copyright', ELUSICVE_THEME_LAN),
        'default' => '&copy; ' . date('Y') . ' <a href="' . get_bloginfo('site_url') . '">' . get_bloginfo('name') . '</a>',
      ),
      array(
        'id' => 'google_analytics',
        'type' => 'text',
        'title' => __('Google Analytics ID', ELUSICVE_THEME_LAN),
        'default' => 'UA-XXXXX-X',
      ),
      array(
        'id' => 'livechat_active',
        'type' => 'switch',
        'title' => __('LiveChat', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'livechat_status',
        'type' => 'button_set',
        'title' => __('LiveChat Status', ELUSICVE_THEME_LAN),
        'default' => 'online',
        'options' => array(
          'online' => 'Online',
          'offline' => 'Offline',
        ),
      ),
      array(
        'id' => 'livechat_scripts',
        'type' => 'ace_editor',
        'title' => __('LiveChat Script', ELUSICVE_THEME_LAN),
        'default' => '',
        'required' => array('livechat_active', '=', '1'),
        'mode' => 'html',
      ),
    );
    return array(
      'title' => __('Footer', ELUSICVE_THEME_LAN),
      'id' => 'eli-footer',
      'icon' => 'el el-adjust',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/footer/fields', $fields),
        //'subsection' => TRUE,
    );
  }

  function optionTweet() {
    $fields = array(
      array(
        'id' => 'show_tweet_feed',
        'type' => 'switch',
        'title' => __('Show Tweet Feeds', ELUSICVE_THEME_LAN),
        'default' => true,
      ),
      array(
        'id' => 'tweet_feed_title',
        'type' => 'text',
        'title' => __('Block Title', ELUSICVE_THEME_LAN),
        'default' => 'Tweet feeds',
      ),
      array(
        'id' => 'tweet_api_consumer_key',
        'type' => 'text',
        'title' => __('API Consumer key', ELUSICVE_THEME_LAN),
        'default' => '8mbnJ5zNFFtNTPxobaIwOHftX',
      ),
      array(
        'id' => 'tweet_api_consumer_secret',
        'type' => 'text',
        'title' => __('API Consumer Secret', ELUSICVE_THEME_LAN),
        'default' => 'S7rMqmMN1vCWJLOuQilZMX8VpTWZ8uuTJQuK69Z77mIW1lVDj3',
      ),
      array(
        'id' => 'tweet_api_access_token',
        'type' => 'text',
        'title' => __('API Access Token', ELUSICVE_THEME_LAN),
        'default' => '262489722-wvxZkFQPFzm6FcxxVney65EJz2sFgIZ9gsLMfxZj',
      ),
      array(
        'id' => 'tweet_api_access_secret',
        'type' => 'text',
        'title' => __('API Access Secret', ELUSICVE_THEME_LAN),
        'default' => '2HDXekYaE6hKmVCJevN7QmKboiafHGnfS127KJ1c9g7hf',
      ),
      array(
        'id' => 'tweet_username',
        'type' => 'text',
        'title' => __('Twitter User name', ELUSICVE_THEME_LAN),
        'default' => 'iLLusiveDesign2',
      ),
    );
    return array(
      'title' => __('Tweet', ELUSICVE_THEME_LAN),
      'id' => 'eli-tweets',
      'icon' => 'el el-twitter',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/tweets/fields', $fields),
        //'subsection' => TRUE,
    );
  }

  function optionSocial() {
    $fields = array(
      array(
        'id' => 'section-contact',
        'type' => 'section',
        'title' => __('Contact Info', ELUSICVE_THEME_LAN),
        'indent' => true,
      ),
      array(
        'title' => __('Address', ELUSICVE_THEME_LAN),
        'id' => 'contact_address',
        'type' => 'textarea'
      ),
      array(
        'title' => __('Email', ELUSICVE_THEME_LAN),
        'id' => 'contact_email',
        'type' => 'text'
      ),
      array(
        'title' => __('Phone', ELUSICVE_THEME_LAN),
        'id' => 'contact_phone',
        'type' => 'text'
      ),
      array(
        'title' => __('Web Address', ELUSICVE_THEME_LAN),
        'id' => 'contact_website',
        'type' => 'text'
      ),
      array(
        'id' => 'contact_map_script',
        'type' => 'ace_editor',
        'title' => __('Google Map Script', ELUSICVE_THEME_LAN),
        'default' => '',        
        'mode' => 'html',
      ),
      array(
        'id' => 'contact_form_shortcode',
        'type' => 'text',        
        'title' => __('Add Form Shortcode(Contact Form 7)', ELUSICVE_THEME_LAN),       
      ),
      array(
        'id' => 'section-social',
        'type' => 'section',
        'title' => __('Social Links', ELUSICVE_THEME_LAN),
        'indent' => true,
      ),
      array(
        'title' => __('Widget Inner Text', ELUSICVE_THEME_LAN),
        'id' => 'social_icons_prefix',
        'type' => 'text'
      ),
      array(
        'title' => __('Facebook', ELUSICVE_THEME_LAN),
        'id' => 'social_facebook',
        'type' => 'text'
      ),
      array(
        'title' => __('Twitter', ELUSICVE_THEME_LAN),
        'id' => 'social_twitter',
        'type' => 'text'
      ),
      array(
        'title' => __('Google+', ELUSICVE_THEME_LAN),
        'id' => 'social_google-plus',
        'type' => 'text'
      ),
      array(
        'title' => __('Youtube', ELUSICVE_THEME_LAN),
        'id' => 'social_youtube',
        'type' => 'text'
      ),
      array(
        'title' => __('LinkedIn', ELUSICVE_THEME_LAN),
        'id' => 'social_linkedin',
        'type' => 'text'
      ),
      array(
        'title' => __('Pinterest', ELUSICVE_THEME_LAN),
        'id' => 'social_pinterest',
        'type' => 'text'
      ),
      array(
        'title' => __('RSS Feed', ELUSICVE_THEME_LAN),
        'id' => 'social_rss',
        'type' => 'text'
      ),
      array(
        'title' => __('Tumblr', ELUSICVE_THEME_LAN),
        'id' => 'social_tumblr',
        'type' => 'text'
      ),
      array(
        'title' => __('Flickr', ELUSICVE_THEME_LAN),
        'id' => 'social_flickr',
        'type' => 'text'
      ),
      array(
        'title' => __('Instagram', ELUSICVE_THEME_LAN),
        'id' => 'social_instagram',
        'type' => 'text'
      ),
      array(
        'title' => __('Dribbble', ELUSICVE_THEME_LAN),
        'id' => 'social_dribbble',
        'type' => 'text'
      ),
      array(
        'title' => __('Skype', ELUSICVE_THEME_LAN),
        'id' => 'social_skype',
        'type' => 'text'
      ),
      array(
        'title' => __('Github', ELUSICVE_THEME_LAN),
        'id' => 'social_github',
        'type' => 'text'
      ),
      array(
        'title' => __('Slideshare', ELUSICVE_THEME_LAN),
        'id' => 'social_slideshare',
        'type' => 'text'
      ),
      array(
        'title' => __('VK.com', ELUSICVE_THEME_LAN),
        'id' => 'social_vk',
        'type' => 'text'
      ),
    );
    return array(
      'title' => __('Social', ELUSICVE_THEME_LAN),
      'id' => 'theme-optionsocial',
      'icon' => 'el el-star',
      'fields' => apply_filters('redux/' . $this->opt_name . '/sections/social/fields', $fields),
        //'subsection' => TRUE,
    );
  }

  public function addExtensions($ReduxFramework) {
    $path = dirname(__FILE__) . '/extensions/';
    $folders = scandir($path, 1);
    foreach ($folders as $folder) {
      if ($folder === '.' or $folder === '..' or ! is_dir($path . $folder)) {
        continue;
      }
      $extension_class = 'ReduxFramework_Extension_' . $folder;
      if (!class_exists($extension_class)) {
        // In case you wanted override your override, hah.
        $class_file = $path . $folder . '/extension_' . $folder . '.php';
        $class_file = apply_filters('redux/extension/' . $ReduxFramework->args['opt_name'] . '/' . $folder, $class_file);
        if ($class_file) {
          require_once( $class_file );
        }
      }
      if (!isset($ReduxFramework->extensions[$folder])) {
        $ReduxFramework->extensions[$folder] = new $extension_class($ReduxFramework);
      }
    }
  }

  public function scripts() {
    //wp_enqueue_style();
  }

}

$theme_options = new ELI_Config();
$theme_options->init();
