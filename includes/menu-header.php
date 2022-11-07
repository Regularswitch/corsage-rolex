<section id="rlx-menu-container" style="margin-bottom: 20px">
    <center class="visible-is-mobile">
        <?php include __DIR__ . "/relogio.php"; ?>
    </center>
    <div class="container-fluid" style="max-width: 1680px;">
        <div class="row row-flex">
            <div class="col-md-1 col-6">
                <div class="plaque-container">
                    <img class="rolex-int-plaque" alt="Rolex" src="<?php echo $base_image; ?>/Retailer_plaque_160x80.jpg">
                </div>
            </div>
            <div class="col-6 mobile-icon" onclick="toggle_rlx_mobile_menu()">
                Menu
                <img alt="seta para baixo" style="margin-left:8px; width:16px;" src="<?php echo $base_image; ?>/arrow_down.png">
            </div>
            <div class="col-lg-11 col-md-11 col-sm-12 col-12 nopad nav-mobile">
                <div class="rolex-menu-nav ">
                    <div class="navigation" role="navigation">
                        <div id="menu-rolex-menu" class="menu-rolex ">
                            <?php foreach ($menus as $link => $name) { ?>
                                <?php if ($name == "CONTATO") { ?>
                                    <li class="menu-item">
                                        <a rel=“canonical” href="<?php echo $link; ?>" class="bt_contact">
                                            <?php echo $name; ?>
                                        </a>
                                    </li>
                                <?php } else { ?>
                                    <li class="menu-item">
                                        <a rel=“canonical” href="<?php echo $link; ?>">
                                            <?php echo $name; ?>
                                        </a>
                                    </li>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-mobile-rlx-custom" onclick="toggle_rlx_mobile_menu()">
                <?php foreach ($menus as $link => $name) { ?>
                    <a rel=“canonical” href="<?php echo $link; ?>">
                        <?php echo $name; ?>
                    </a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>