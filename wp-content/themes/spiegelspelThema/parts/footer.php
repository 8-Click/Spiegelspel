<?php
$args = array(
    'post_type' => 'attachment',
    'title' => 'linkd'
);
$linkd_id = get_posts($args);
$linkd_url = wp_get_attachment_url($linkd_id[0]->ID);

$linkd_link = get_field("link_linkd");
var_dump($linkd_link)

?>


</body>
<footer>
    <div class="footerContainer">
        <div class="socialText">
            <p class="footerP"><strong>Naam contactpersoon:</strong>&nbsp;A.Nijlant</p>
            <p class="footerP"><strong>Bedrijfsnaam:</strong>&nbsp;Focus6</p>
            <p class="footerP"><strong>Website:</strong>&nbsp;www.focus6.nl</p>
            <p class="footerP"><strong>E-mail:</strong>&nbsp;a.nijlant@focus6.nl</p>
        </div>
        <a href="<?= esc_url($linkd_link)?>" class="linkedInIcon">
            <img id="icon" src="<?= $linkd_url ?>">
        </a>
    </div>
</footer>


</html>