<?php
$args = array(
    'post_type' => 'attachment',
    'title' => 'logo');
$logo_id = get_posts($args);
$image_url = wp_get_attachment_url($logo_id[0]->ID); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="./assets/js/header.js"></script>
</head>

<body>

    <header class="headerContainer">
        <div class="logoContainer">

            <img src="<?= esc_url($image_url) ?>">
        </div>
        <nav class="navLinks">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'hoofdmenu',
                'container' => false,
                'menu-class' => 'nav navbar-nav'
            ));
            ?>
        </nav>


    </header>