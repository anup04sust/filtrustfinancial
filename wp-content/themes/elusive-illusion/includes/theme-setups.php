<?php

/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
/*
 * Theme Supports
 */
if (!function_exists('eli_wptheme_setup')) :

  function eli_wptheme_setup() {
    load_theme_textdomain(ELUSICVE_THEME_LAN, ELUSICVE_THEME_PATH . 'languages');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_post_type_support('page', 'excerpt');
    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support('html5', array(
      'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ));
    add_theme_support('post-formats', array(
      'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio',
    ));
    add_theme_support('post-thumbnails');
    //set_post_thumbnail_size(825, 510, true);
    //add_image_size('square-thumb', 480, 480, true);

    register_nav_menu('primary-menu', __('Primary Menu', ELUSICVE_THEME_LAN));
     register_nav_menu('mobile-nav', __('Small Device Menu', ELUSICVE_THEME_LAN));
    register_nav_menu('footer-menu', __('Footer Menu', ELUSICVE_THEME_LAN));
  }

  add_action('after_setup_theme', 'eli_wptheme_setup');
endif;

if (!function_exists('eli_wptheme_scripts')) :

  function eli_wptheme_scripts() {
    global $drjoseph_options;
    /*Fonts*/  
    $fonts = array(
      'Open Sans' => '400,300,400italic,600,700,800:latin',
      'Roboto Condensed' => '400,300,400italic,700:latin',
    );    
    wp_enqueue_style('theme-fonts', theme_font_url($fonts), array(), null);
    wp_enqueue_style('font-awesome', ELUSICVE_THEME_ASSETS . 'css/font-awesome.min.css');
    /*Style*/  
    wp_enqueue_style('bootstrap', ELUSICVE_THEME_ASSETS . 'css/bootstrap.min.css');
    wp_enqueue_style('mmenu-css', ELUSICVE_THEME_ASSETS . 'css/jquery.mmenu.all.min.css');
    wp_enqueue_style('eli-css', ELUSICVE_THEME_ASSETS . 'css/main.css',array('bootstrap'));
    /*Javascripts*/  
    wp_enqueue_script('bootstrap', ELUSICVE_THEME_ASSETS. 'js/vendor/bootstrap.min.js', array('jquery'),3.0,TRUE);
    wp_enqueue_script('mmenu', ELUSICVE_THEME_ASSETS. 'js/vendor/jquery.mmenu.min.all.js', array('jquery'),3.0,TRUE);
     wp_enqueue_script('eli-js', ELUSICVE_THEME_ASSETS . 'js/eli-theme.js', array('jquery'),1.0,TRUE);
         global $eli_options;
    wp_localize_script('eli-js', 'eli_obj', array(
      'site_url' => get_site_url(),
      'ajaxUrl' => admin_url('ajax.php'),
      'mm_theme' => $eli_options['mobile_menu_theme'],
      'mm_show_logo' => ($eli_options['show_logo_sx']) ? TRUE : FALSE,
      'mm_logo' => $eli_options['logo_url_sx']['url'],
      'mm_close' => MCLINIC_THEME_URL.'/images/mm-close.png',
        )
    );
  }

 add_action('wp_enqueue_scripts', 'eli_wptheme_scripts');
endif;