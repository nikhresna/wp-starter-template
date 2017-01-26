<?php 

add_support();
function add_support() {
	add_theme_support('post-thumbnails');
}

// remove support
show_admin_bar(false);
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action ('wp_head', 'rsd_link');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'wp_resource_hints', 2);

// register menu
add_action('init', 'register_menus');
function register_menus() {
  register_nav_menus(array(
    'primary_menu' => 'Primary Menu',
    'footer_menu' => 'Footer Menu',
    'footer_links' => 'Footer Links',
    'logout_menu' => 'Logout Links',
  ));
}


// remove default dimension wp generates
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3);
function remove_thumbnail_dimensions($html, $post_id, $post_image_id) {
  $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
  return $html;
}
