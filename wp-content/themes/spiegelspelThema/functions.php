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

function add_linkedin_meta_box() {
    add_meta_box(
        'linkedin_meta_box', // ID of the meta box
        'LinkedIn URL', // Title of the meta box
        'display_linkedin_meta_box', // Callback function to display the meta box
        'post', // Post type where the meta box should appear
        'normal', // Context where the meta box should appear
        'high' // Priority of the meta box
    );
}
add_action('add_meta_boxes', 'add_linkedin_meta_box');

function display_linkedin_meta_box($post) {
    // Retrieve the current value of the custom field
    $linkedin_url = get_post_meta($post->ID, '_linkedin_url', true);
    ?>
    <label for="linkedin_url">LinkedIn URL:</label>
    <input type="text" name="linkedin_url" id="linkedin_url" value="<?php echo esc_attr($linkedin_url); ?>" size="25" />
    <?php
}

function save_linkedin_meta_box($post_id) {
    // Check if the current user has permission to edit the post
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Check if the custom field value is set
    if (isset($_POST['linkedin_url'])) {
        // Save the custom field value
        update_post_meta($post_id, '_linkedin_url', sanitize_text_field($_POST['linkedin_url']));
    }
}
add_action('save_post', 'save_linkedin_meta_box');
