<?php
function mijn_thema_setup() {
    register_nav_menus(array(
        'hoofdmenu' => __('Hoofdmenu')
    ));
}
add_action('after_setup_theme', 'mijn_thema_setup');

function add_class_to_content_paragraphs($content) {
    // Add a class to each <p> tag
    $content = preg_replace('/<p([^>]+)?>/', '<p$1 class="paragraph">', $content);
    return $content;
}
add_filter('the_content', 'add_class_to_content_paragraphs');
