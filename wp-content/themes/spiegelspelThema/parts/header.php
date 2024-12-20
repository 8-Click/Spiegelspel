<?php
$args = array(
    'post_type' => 'attachment',
    'title' => 'logo'
);
$logo_id = get_posts($args);
$image_url = wp_get_attachment_url($logo_id[0]->ID);
if (empty($image_url)) {
    $image_url='https://cdn.pixabay.com/photo/2016/09/14/20/50/tooth-1670434_640.png';
}
?>


<!DOCTYPE html>
<html <?php language_attributes();

?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Website over het spiegelspel van A.Nijlant u kunt u hier ook contact opnemen.">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/header.js"></script>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>assets/img/favicon_io(2)/favicon.ico" type="image/x-icon">
    
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>assets/img/favicon_io(2)/favicon.png" type="image/png">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>assets/img/favicon_io(2)/favicon.svg" type="image/svg+xml">
</head>



<header class="headerContainer">
    <a class="logoContainer" href="<?= home_url() ?>">
        <img src="<?= esc_url($image_url) ?>">
    </a>
    <button id="menuToggle" class="hamburgerMenu">
        <span></span>
        <span></span>
        <span></span>
    </button>
    <nav class="navLinks" id="navMenu">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'hoofdmenu',
            'container' => false,
            'menu-class' => 'nav navbar-nav',
            'link_before' => '<div class="nav-link-wrapper"><span class="nav-link">',
            'link_after' => '</span></div>',
        ));
        ?>
    </nav>
</header>


<body>