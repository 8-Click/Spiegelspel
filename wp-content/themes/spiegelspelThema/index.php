<?php

$args = array(
    'post_type' => 'attachment',
    'title' => 'Nijlant'
);
$Nijlant_id = get_posts($args);
$Nijlant_url = wp_get_attachment_url($Nijlant_id[0]->ID);


?>

<?php include "parts/header.php" ?>
<div class="home">
    <div class="homeContainer">
        <div class="backgroundImage">
            <div class="textBox">
                <h1 class="h1_index">SPIEGELSPEL</h1>
                <h2 class="h2_index">FOCUS6</h2>
            </div>
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


<?php include "parts/footer.php" ?>