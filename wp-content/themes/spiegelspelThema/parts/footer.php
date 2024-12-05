<?php
$args = array(
    'post_type' => 'attachment',
    'title' => 'linkd'
);
$linkd_id = get_posts($args);
$linkd_url = wp_get_attachment_url($linkd_id[0]->ID);

$post = get_page_by_title('Footer', OBJECT, 'post');


if ($post) {
    $post_id = $post->ID;
    $linkd_link = get_post_meta($post_id, '_linkedin_url', true);
    $website_link = get_post_meta($post_id, '_website_url', true);
    $mail_url = get_post_meta($post_id, '_email_url', true);
} else {
    $linkd_link = 'https://www.youtube.com/watch?v=xvFZjo5PgG0';
    $mail_url = 'https://www.youtube.com/watch?v=xvFZjo5PgG0';
    $website_link = 'https://www.youtube.com/watch?v=xvFZjo5PgG0';
}

?>


</body>
<footer>
    <div class="footerContainer">
        <div class="socialText">
            <p class="footerP"><strong>Naam contactpersoon:</strong>&nbsp;A.Nijlant</p>
            <p class="footerP"><strong>Bedrijfsnaam:</strong>&nbsp;Focus6</p>
            <p class="footerP"><strong>Website:</strong>&nbsp;<a class="footerText" href="<?= esc_url($website_link)?>" targer="_blanc">focus6.nl</a></p>
            <p class="footerP"><strong>E-mail:</strong>&nbsp;<a class="footerText" href="mailto:<?= esc_attr($mail_url) ?>" target="_blanc"><?=$mail_url ?></a></p>
        </div>
        <a href="<?= esc_url($linkd_link)?>" class="linkedInIcon" target="_blanc">
            <img id="icon" src="<?= $linkd_url ?>">
        </a>
    </div>
</footer>


</html>