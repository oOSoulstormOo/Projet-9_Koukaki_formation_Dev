<?php
// Chargement des styles
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    
}   
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

// Chargement des scripts
function theme_enqueue_script() {
    wp_enqueue_script('child-script', get_stylesheet_directory_uri() . '/js/animate.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_script');

// Chargement de Skroolr
function enqueue_skroolr_script() {
    wp_enqueue_script('skroolr-js', 'https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js', true);
    wp_enqueue_script('skroolr-init-js', get_stylesheet_directory_uri() . '/js/skroolr.js');
}
add_action('wp_enqueue_scripts', 'enqueue_skroolr_script');

// Chargement de SwiperJS
function enqueue_swiper_scripts() {
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_scripts');

// Get customizer options form parent theme
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}