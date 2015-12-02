<?php

/*
 * @package IllusiveDesign
 * @subpackage Elusive Illusion
 * @since Elusive Illusion 1.0
 */
add_action('widgets_init', 'filtrustfinancial_widgets_init');

function filtrustfinancial_widgets_init() {
  register_sidebar(array(
    'name' => __('Customer Info Sidebar'),
    'id' => 'sidebar-customer-info',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</div></aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3><div class="winner">',
  ));
}

add_action('wp_enqueue_scripts', 'filtrustfinancial_scripts');

function filtrustfinancial_scripts() {


  if (is_page_template('tpl-customer-info.php')) {
    wp_enqueue_style('bs-select-style', get_stylesheet_directory_uri() . '/css/bootstrap-select.css');
    wp_enqueue_style('bs-datepk-style', get_stylesheet_directory_uri() . '/css/bootstrap-datetimepicker.min.css');
    wp_enqueue_script('responsiveTabs', get_stylesheet_directory_uri() . '/js/jquery.responsiveTabs.js', array('jquery'), 3.0, TRUE);
    wp_enqueue_script('bootstrap-select', get_stylesheet_directory_uri() . '/js/bootstrap-select.min.js', array('jquery'), 3.0, TRUE);
    wp_enqueue_script('moment-js', get_stylesheet_directory_uri() . '/js/moment.min.js', array('jquery'), 3.0, TRUE);
    wp_enqueue_script('bootstrap-datetimepicker', get_stylesheet_directory_uri() . '/js/bootstrap-datetimepicker.min.js', array('moment-js'), 3.0, TRUE);
    wp_enqueue_script('customar-info', get_stylesheet_directory_uri() . '/js/customar.js', array('jquery'), 1.0, TRUE);
  }
  wp_enqueue_style('cinfo-css', get_stylesheet_directory_uri() . '/css/customar-info.css', array('eli-css'));
}
