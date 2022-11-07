<?php
$domain = get_site_url();
$base_image = plugins_url('/rolex/public/images');

$links_footer = [
    "{$domain}/rolex" => "Rolex",
    "{$domain}/quem-somos" => "Quem somos",
    "{$domain}/contato" => "Contato",
    "{$domain}/politica-privacidade" => "Politica Privacidade",
];

?>

<div>
    <div class="col-12 links-footer-layout">
        <?php foreach ($links_footer as $slug => $text) { ?>
            <a href=" <?php echo $slug; ?>" class="px-4">
                <?php echo $text; ?>
            </a>
        <?php } ?>
    </div>
</div>