<?php
/**
 * My First Theme functions and definitions
 */

if ( ! function_exists( 'myfirsttheme_enqueue_styles' ) ) :
    function myfirsttheme_enqueue_styles() {
        wp_enqueue_style('myfirsttheme-style', get_stylesheet_uri());
    }
endif;

add_action('wp_enqueue_scripts', 'myfirsttheme_enqueue_styles');