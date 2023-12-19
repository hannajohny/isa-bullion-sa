<?php

// Template Resources
function theme_resources() {
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' );
  wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css' );
  wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css' );
  wp_enqueue_style( 'hamburger', get_template_directory_uri() . '/css/hamburger.css' );    		   
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
// Load jQuery  
add_action('wp_enqueue_scripts','theme_resources');

function load_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_register_script( 'jqueryscript', 'https://code.jquery.com/jquery-3.3.1.min.js');
  wp_enqueue_script( 'jqueryscript' );
}    
add_action('wp_enqueue_scripts', 'load_scripts');

// Disable updates nag
function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
	}
	add_filter('pre_site_transient_update_core','remove_core_updates');
	add_filter('pre_site_transient_update_plugins','remove_core_updates');
	add_filter('pre_site_transient_update_themes','remove_core_updates');

// Remove WordPress Version from admin footer
function remove_wp_footer_version() {
  if ( !current_user_can('manage_options') ) { 
      remove_filter( 'update_footer', 'core_update_footer' ); 
  }
}
add_action( 'admin_menu', 'remove_wp_footer_version' );

// Add BehindPixels website link to the admin footer
function bp_footer() {
  echo '<span id="footer-thankyou"><a href="https://www.behindpixels.com/" target="_blank">BehindPixels</a></span>';
}

add_filter('admin_footer_text', 'bp_footer');

// Navigation Menus
register_nav_menus(array(
    'main' => __('Main Menu')
    ));

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

// Show Featured Image on Custom Post Types
add_filter('manage_posts_columns', 'add_thumbnail_column', 5);
 
function add_thumbnail_column($columns){
  $columns['new_post_thumb'] = __('Image');
  return $columns;
}