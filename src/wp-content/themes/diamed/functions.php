<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');


add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');

function enqueue_custom_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    
    wp_enqueue_script('swiper-init', get_template_directory_uri() . '/assets/js/swiper-init.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');


function enqueue_custom_styles() {
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_custom_styles');

?>