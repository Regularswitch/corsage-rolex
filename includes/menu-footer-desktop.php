<section class="footer_menu desktop">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <ul class="footer_menu_itens row">
                    <?php foreach ($menus as $link => $name) { ?>
                        <li class="itens_footer col">
                            <a rel=“canonical” href="<?php echo $link; ?>" class="link_iten_footer">
                                <?php echo $name; ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>