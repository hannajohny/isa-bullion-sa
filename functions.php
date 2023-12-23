<?php

// * Template Resources
function theme_resources() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css' );
  // wp_enqueue_style( 'owl-main', get_template_directory_uri() . '/dist/css/owl.carousel.min.css' );
  // wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/dist/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
// * Load Styles  
add_action('wp_enqueue_scripts','theme_resources');

function load_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrapscript', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js' );

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

function wpml_language_switcher() {
  $languages = apply_filters( 'wpml_active_languages', NULL, 'order=name' );

  if (!empty($languages)) {
    foreach ($languages as $language) {
        ?>
        <li>
          <a class="dropdown-item bp-dropdown-item text-strong bp-dropdown-item" href="<?php echo esc_url($language['url']); ?>">
            <?php echo esc_html($language['native_name']); ?>
          </a>
        </li>
      <?php
    }
}
}
