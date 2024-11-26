<?php
$args = array(
    'post_type' => 'attachment',
    'title' => 'video'
);
$logo_id = get_posts($args);
$video_url = wp_get_attachment_url($logo_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'foto1'
);
$logo_id = get_posts($args);
$foto1_url = wp_get_attachment_url($logo_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'foto2'
);
$logo_id = get_posts($args);
$foto2_url = wp_get_attachment_url($logo_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'infofoto1'
);
$logo_id = get_posts($args);
$info_foto1_url = wp_get_attachment_url($logo_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'infofoto2'
);
$logo_id = get_posts($args);
$info_foto2_url = wp_get_attachment_url($logo_id[0]->ID);

$args = array(
    'post_type' => 'attachment',
    'title' => 'infofoto3'
);
$logo_id = get_posts($args);
$info_foto3_url = wp_get_attachment_url($logo_id[0]->ID);

?>




<?php include "parts/header.php" ?>

<div class="parentContainer">
    <div class="infoContainer">
        <div class="videoContainer">
            <div class="video">
                <img id="videoImage" src="<?= $video_url ?>">
                <p class="containerText">Meerwaarde</p>
            </div>
            <div class="videoText">
                <h1 class="h1_info">DOEL SPIEGELSPEL</h1>
                <p  class="containerText">Een methodiek om spelenderwijs het teamleren te bevorderen</p>
            </div>
        </div>
        <div class="fotoContainer">
            <div class="fotoBox">
                <img class="foto" src="<?= $foto1_url ?>">
                <p class="containerText">Kwaliteit</p>
            </div>
            <div class="fotoBox">
                <img class="foto" src="<?= $foto2_url ?>">
                <p class="containerText">Samenwerken</p>
            </div>
            <div class="fotoBox">
                <img class="foto" src="<?= $foto2_url ?>">
                <p class="containerText">Teamontwikkeling</p>
            </div>
        </div>
    </div>
    <div class="instructionContainer">  
        <h2 class="h2_info">HET SPIEGELSPEL</h2>
        <div class="initialBox">
            <div class="leftColumn">
                <div class="paragraphImage">
                    <img class="image" src="<?= $info_foto1_url ?>">
                </div>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'title' => 'Leer ontwikkelen'
                );
                $post_text = new WP_Query($args);
                if ($post_text->have_posts()) {
                    $post_text->the_post();
                ?>
                    <p class="paragraph">
                        <?php the_content(); ?>
                    </p>
                <?php
                }
                ?>
                <div class="paragraphImage">
                    <img class="image" src="<?= $info_foto3_url ?>">
                </div>
            </div>
            <div class="rightColumn">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'title' => 'Ontdekken'
                );
                $post_text = new WP_Query($args);
                if ($post_text->have_posts()) {
                    $post_text->the_post();
                ?>
                    <p class="paragraph">
                        <?php the_content(); ?>
                    </p>
                <?php
                }
                ?>
                <div class="paragraphImage">
                    <img class="image" src="<?= $info_foto2_url ?>">
                </div>
                <?php
                $args = array(
                    'post_type' => 'post',
                    'title' => 'tijdens'
                );
                $post_text = new WP_Query($args);
                if ($post_text->have_posts()) {
                    $post_text->the_post();
                ?>
                    <p class="paragraph">
                        <?php the_content(); ?>
                    </p>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "parts/footer.php" ?>