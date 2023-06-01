<?php get_header(); ?>

<?php include __DIR__ . "/includes/boot.php"; ?>

<div class="container-wrap">

    <div class="container">

        <?php include __DIR__ . "/includes/menu-header.php"; ?>

        <div class="container-fluid" style="padding: 0">
            <div class="row">
                <div class="col-12">
                    <div class="rlx_banner">
                        <img src="<?php echo $base_image; ?>/ladingrlx/banner_img_1680x260.jpg" alt="rolex">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="offset-1 col-10 div text_intro">
                    <h2>VIVA A EXPERIÊNCIA ROLEX</h2>
                    <h1 style="text-transform: uppercase;">DISTRIBUIDOR OFICIAL ROLEX EM São Paulo</h1>
                    <div class="text content" style="width: 100%;">
                        <p align="center">Os relógios Rolex são produzidos a partir
                            das melhores matérias-primas e montados segundo métodos que levam meticulosamente
                            em conta cada detalhe. Cada componente é projetado, desenvolvido e produzido segundo
                            rigorosos padrões de exigência.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row row-grid-home">

                <?php foreach ($prodsHome as $p) { ?>
                    <div class="col-md-4 col-6">
                        <a rel=“canonical” href="<?php echo $baseUrl . $p['slug']; ?>" class="rlx_link">
                            <div class="rlx_item">
                                <picture>
                                    <source srcset="<?php echo $baseUrlFoto.'lg/'. $p['id'] . '.png' ?>" media="(min-width: 800px)">
                                    <img src="<?php echo $baseUrlFoto.'md/'. $p['id'] . '.png' ?>" width="100%" alt="<?php echo $p['title'] ?>">
                                </picture>
                            </div>
                            <div class="rlx_item_name">
                                <span class="rlx">Rolex</span>
                                <p class="rlx_item_singular"><?php echo $p['title'] ?></p>
                            </div>
                        </a>
                    </div>
                <?php } ?>

            </div>
        </div>

        <section class="destaques">
            <div class=" container-rlx">
                <span>
                    <strong style="margin-bottom: 20px; display: block; color: black; padding-left: 14px">
                        Seleções em destaque
                    </strong>
                </span>
                <div class="row row-grid-double">
                    <div class="col-6  ">
                        <div class="fig">
                            <a rel=“canonical” href="<?php echo $domain; ?>/rolex?cmplp=watches/man">
                                <img class="image_cover_rlx_mobile" src="<?php echo $base_image; ?>/ladingrlx/mens-watches_sky_dweller.jpg" alt="RELÓGIOS ROLEX MASCULINOS">
                                <span><strong>RELÓGIOS ROLEX MASCULINOS</strong></span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6  ">
                        <div class="fig">
                            <a rel=“canonical” href="<?php echo $domain; ?>/rolex?cmplp=watches/woman">
                                <img class="image_cover_rlx_mobile" src="<?php echo $base_image; ?>/ladingrlx/womens-watches_pearlmaster_39.jpg" alt="RELÓGIOS ROLEX FEMININOS">
                                <span><strong>RELÓGIOS ROLEX FEMININOS</strong></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top: 20px;">
                    <div class="col-12">
                        <div class="fig">
                            <a rel=“canonical” href="<?php echo $domain; ?>/rolex?cmplp=watches/gold">
                                <img class="image_cover_rlx_mobile" src="<?php echo $base_image; ?>/ladingrlx/gold-watches.jpg" alt="RELÓGIOS ROLEX EM OURO">
                                <span><strong>RELÓGIOS ROLEX EM OURO</strong></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="xperience_rolex">
            <div class=" container-rxl-contact">
                <div class="row">
                    <div class="offset-lg-2 col-lg-8 offset-md-2 col-md-8 offset-sm-1 col-sm-10 offset-1 col-10">
                        <div class="content_img">

                            <img src="<?php echo $base_image; ?>/BoutiqueCorsage_Brazil_MA18_003.jpg" alt="VISITE A NOSSA BOUTIQUE">

                            <h2 class="xp_title">VISITE A NOSSA BOUTIQUE</h2>
                            <div class="text_xp">
                                <p>A Corsage tem orgulho em fazer parte da rede mundial de Distribuidores Oficiais Rolex, autorizados a vender e a realizar a manutenção dos relógios Rolex. A Corsage está à sua disposição para ajudá-lo a escolher, em uma vasta gama de relógios Rolex, o relógio perfeito para você. A Corsage é reconhecida como um Distribuidor Oficial Rolex, pois nós somente vendemos relógios Rolex com garantia de autenticidade</p>
                            </div>
                            <a rel=“canonical” href="<?php echo $domain; ?>/contato-rolex" class="button">CONTATO</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php include __DIR__ . "/includes/slider.php"; ?>

        <?php include __DIR__ . "/includes/logo-footer.php"; ?>

        <?php include __DIR__ . "/includes/menu-footer-desktop.php"; ?>

        <?php include __DIR__ . "/includes/menu-footer-mobile.php"; ?>

        <?php include __DIR__ . "/includes/link-to-top.php"; ?>

        <?php include __DIR__ . "/includes/micro-data.php"; ?>

        <?php include __DIR__ . "/includes/meta-tag.php"; ?>

    </div>

</div>

<?php get_footer(); ?>