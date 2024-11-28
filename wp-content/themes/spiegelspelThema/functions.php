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



