<?php
/*
* Adds a custom setting and control to allow adjust the number of books displayed per page.
*/
function imr_bookcollection_customize_register($wp_customize) {
    // Add Section for Book Settings
    $wp_customize->add_section('bookcollection_settings', array(
        'title'    => 'Book Collection Settings',
        'priority' => 30,
    ));

    // Setting to control the number of books per page
    $wp_customize->add_setting('books_per_page', array(
        'default'           => 5,
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('books_per_page', array(
        'label'   => 'Books per page',
        'section' => 'bookcollection_settings',
        'type'    => 'number',
    ));
}

add_action('customize_register', 'imr_bookcollection_customize_register');
