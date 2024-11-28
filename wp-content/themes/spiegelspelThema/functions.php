<?php
function mijn_thema_setup() {
    register_nav_menus(array(
        'hoofdmenu' => __('Hoofdmenu')
    ));
}
add_action('after_setup_theme', 'mijn_thema_setup');

// Add Contact Form 7 support
function add_contact_form_7_support() {
    if ( function_exists( 'wpcf7' ) ) {
        add_theme_support( 'contact-form-7' );
    }
}
add_action( 'after_setup_theme', 'add_contact_form_7_support' );



function mijn_thema_enqueue_scripts() {
    wp_enqueue_script('header-script', get_template_directory_uri() . '/assets/js/header.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mijn_thema_enqueue_scripts');

function add_class_to_content_paragraphs($content) {
    // Add a class to each <p> tag
    $content = preg_replace('/<p([^>]+)?>/', '<p$1 class="paragraph">', $content);
    return $content;
}
add_filter('the_content', 'add_class_to_content_paragraphs');
