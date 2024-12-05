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
    'title' => 'foto3'
);
$logo_id = get_posts($args);
$foto3_url = wp_get_attachment_url($logo_id[0]->ID);

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
                <video id="videoImage" controls autoplay>
                    <source  src="<?= $video_url ?>" type="video/mp4">
                </video>
                <p class="containerText">Meerwaarde</p>
            </div>
            <div class="videoText">
                <h1 class="h1_info">DOEL SPIEGELSPEL</h1>
                <p class="containerTextMethodiek">Een methodiek om spelenderwijs het teamleren te bevorderen</p>
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
                <img class="foto" src="<?= $foto3_url ?>">
                <p class="containerText">Teamontwikkeling</p>
            </div>
        </div>
    </div>
    <div class="instructionContainer">
        <h2 class="titleSpiegel">HET SPIEGELSPEL</h2>
        <div class="initialBox">
            <div class="leftColumn">
                <div class="paragraphImage">
                    <img class="image1" src="<?= $info_foto1_url ?>">
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

                    <?php the_content(); ?>

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

                    <?php the_content(); ?>

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

                    <?php the_content(); ?>

                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<?php include "parts/footer.php" ?>



<script>
    document.addEventListener('DOMContentLoaded', function() {
        function switchImages() {
            const infoFoto2 = document.getElementById('infoFoto2');
            const infoFoto3 = document.getElementById('infoFoto3');

            if (window.innerWidth <= 768) {
                // Switch the src attributes
                const tempSrc = infoFoto2.src;
                infoFoto2.src = infoFoto3.src;
                infoFoto3.src = tempSrc;
            } else {
                // Reset to original src attributes
                infoFoto2.src = '<?= esc_url($info_foto2_url) ?>';
                infoFoto3.src = '<?= esc_url($info_foto3_url) ?>';
            }
        }

        // Run on load
        switchImages();

        // Run on resize
        window.addEventListener('resize', switchImages);
    });
</script>