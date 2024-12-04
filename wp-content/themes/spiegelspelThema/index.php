<?php

$args = array(
    'post_type' => 'attachment',
    'title' => 'Nijlant'
);
$Nijlant_id = get_posts($args);
$Nijlant_url = wp_get_attachment_url($Nijlant_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'home'
);
$bg_image_id = get_posts($args);
$bg_image_url = wp_get_attachment_url($bg_image_id[0]->ID);
?>

<?php include "parts/header.php"; ?>

<style>
    .backgroundImage {
        background-image: linear-gradient(to right, #6581ac, rgba(255, 255, 255, 0)),
            url("<?= $bg_image_url ?>");
        background-size: 100% 100%;
        background-position: center;
        background-repeat: no-repeat;
        position: absolute;
    }
</style>

<div class="home">
    <div class="homeContainer">
        <div class="backgroundImage"></div>
        <div class="textBox">
            <h1 class="h1_index">SPIEGELSPEL</h1>
            <h2 class="h2_index">FOCUS6</h2>
        </div>
    </div>
    <div class="info_Nijlant">
        <img class="Nijlant_img" src="<?= $Nijlant_url ?>" alt="">
        <div class="text_info">
            <?php
            $args = array(
                'post_type' => 'post',
                'title' => 'Welkom'
            );
            $post_text = new WP_Query($args);
            if ($post_text->have_posts()) {
                $post_text->the_post();
            ?>

                <?php the_content(); ?>

            <?php
            }
            ?>
        </div>
    </div>
</div>


<?php include "parts/footer.php"; ?>