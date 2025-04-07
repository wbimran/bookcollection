<?php
/*
 * This is the child theme for Twenty Twenty-One theme, generated with Generate Child Theme plugin by catchthemes.
 *
 */
add_action( 'wp_enqueue_scripts', 'imr_bookcollection_enqueue_styles' );
function imr_bookcollection_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('parent-style')
    );
}
// Enqueue the Customizer settings
require get_stylesheet_directory() . '/customizer.php';

