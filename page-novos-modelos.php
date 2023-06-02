<?php get_header(); ?>

<?php include __DIR__ . "/includes/boot.php"; ?>

<div class="container-wrap">

	<div class="container">

		<?php include __DIR__ . "/includes/menu-header.php"; ?>

		<script id="rlx-corner">
			(function(b, c, a, d, f, g, h, k, l) {
				var e = c.getElementsByTagName(a)[0];
				a = c.createElement(a);
				var m = function(a) {
					delete b[d];
					a(c.getElementById(f), [g, k, h, l])
				};
				b[d] = b[d] || m;
				a.async = !0;
				a.src = "https://corners.rolex.com/rlx-corner.js";
				e.parentNode.insertBefore(a, e)
			})(window, document, "script", "rlxCornerCallback", "rlx-corner", "b30a73c76d56f5d9e259edc33dae1db7", "", "pt-br", "new-watches-2023");
		</script>

		<div id="rlx-menu-container rlx-corner page-manutencao" style="padding: 0; --display:none !important;">
			<section>
				<figure>
					<picture>
						<source srcset="<?php echo  $base_image; ?>modelos/lg/cover.jpg" media="(min-width:1069px)">
						<img src="<?php echo  $base_image; ?>modelos/md/cover.jpg" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy">
					</picture>
				</figure>
			</section>

			<section class="news-container">
				<div>
					<span class="news-subtitle">Relógios Rolex</span>
					<h1 class="news-title">
						NOVOS MODELOS ROLEX <br>
						2023 - CORSAGE
					</h1>
					<span class="news-description">
						Com suas mais recentes criações, a Rolex reitera sua perpétua busca pela excelência.
						É um desafio permanente, que se exprime por meio do aperfeiçoamento de cada elemento,
						do questionamento de cada conquista e do domínio do know-how.
						Os modelos apresentados demonstram a vontade de se reinventar dentro da continuidade,
						de inovar dentro do espírito da tradição e de colocar a técnica a serviço da ousadia
						criativa. É através desses esforços — reforçados pela visão “superlativa” que permeia
						todo o processo de criação até o mínimo detalhe — que relógios exemplares são formados
						e se perpetuam. Relógios que, com o tempo, se tornam ícones.
					</span>
				</div>
			</section>



			<section class="news-container">
				<div class="news-grid">

					<a rel=“canonical” href="<?php echo $domain; ?>/rolex?cmplp=rolex-watches&cmpfa=gmt-master-ii/m126720vtnr-0001" rel="noopener" title="GMT-MASTER II" to="" draggable="false" class="news-link">
						<figure role="img" draggable="false" class="news-img-wrapper">
							<picture>
								<source srcset="<?php echo  $base_image; ?>/novos-modelos/new_2022_watches_gmt_master_2_portrait.jpg" media="(max-width:1068px)">
								<source srcset="<?php echo  $base_image; ?>/novos-modelos/new_2022_watches_gmt_master_2.jpg" media="(min-width:1069px)">
								<img alt="GMT-MASTER II" loading="lazy" draggable="false" width="100%" class="news-img-item">
							</picture>
							<figcaption>
								<span>GMT-MASTER II</span>
							</figcaption>
						</figure>
					</a>


				</div>
			</section>

			<section class="news-container">
				<figure>
					<picture>
						<source srcset="<?php echo  $base_image; ?>modelos/lg/banner.jpg" media="(min-width:1069px)">
						<img src="<?php echo  $base_image; ?>modelos/md/banner.jpg" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy">
					</picture>
				</figure>
			</section>
		</div>


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