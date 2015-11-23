<?php

/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
/*
 * Add Required Plugin
 * =============================================================================
 */
if (!function_exists('elusiveillusion_wptheme_required_plugins')) {

  function elusiveillusion_wptheme_required_plugins() {
    $plugin = array(
      array(
        'name' => 'Advanced Custom Fields',
        'slug' => 'advanced-custom-fields',
        'source' => ELUSICVE_THEME_ADMIN . 'plugins/advanced-custom-fields.zip',
        'required' => true,
        'version' => '',
        'force_activation' => TRUE,
        'force_deactivation' => FALSE,
        'external_url' => '',
        'is_callable' => '',
      ),
      array(
        'name' => 'Contact Form 7',
        'slug' => 'contact-form-7',
        'source' => ELUSICVE_THEME_ADMIN . 'plugins/contact-form-7.zip',
        'required' => FALSE,
        'version' => '',
        'force_activation' => FALSE,
        'force_deactivation' => FALSE,
        'external_url' => '',
        'is_callable' => '',
      ),
      array(
        'name' => 'Really Simple CAPTCHA',
        'slug' => 'really-simple-captcha',
        'source' => ELUSICVE_THEME_ADMIN . 'plugins/really-simple-captcha.zip',
        'required' => FALSE,
        'version' => '',
        'force_activation' => FALSE,
        'force_deactivation' => FALSE,
        'external_url' => '',
        'is_callable' => '',
      ),
    );
    $config = array(
      'has_notices' => true,
      'is_automatic' => true,
      'nag_type' => 'error',
    );
    tgmpa($plugin, $config);
  }

  add_action('tgmpa_register', 'elusiveillusion_wptheme_required_plugins');
}
require_once dirname(__FILE__).'/theme-content-fields.php';