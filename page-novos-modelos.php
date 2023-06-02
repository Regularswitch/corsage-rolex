<?php get_header(); ?>

<?php include __DIR__ . "/includes/boot.php"; ?>

<div class="container-wrap">

	<div class="container">

		<?php include __DIR__ . "/includes/menu-header.php"; ?>		

		<div id="rlx-menu-container rlx-corner page-manutencao" style="padding: 0; ">
			<section>
				<figure>
					<picture>
						<source srcset="<?php echo  $base_image; ?>/modelos/lg/cover.jpg" media="(min-width:1069px)">
						<img src="<?php echo  $base_image; ?>/modelos/md/cover.jpg" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy">
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

					<?php echo render_tpl_new_model(
						$loop_new_models,
						function ($p) use ($base_image) {
							$title = $p['title'];
							$slug = $p['slug'];
							$id = $p['id'];
							return "
								<a rel=\"canonical\" href=\"{$slug}\" rel=\"noopener\" title=\"{$title}\" to=\"\" draggable=\"false\" class=\"news-link\">
									<figure role=\"img\" draggable=\"false\" class=\"news-img-wrapper\">
										<picture>
											<source srcset=\"{$base_image}/modelos/lg/{$id}.jpg\" media=\"(min-width:1069px)\">
											
											<img src=\"{$base_image}/modelos/md/{$id}.jpg\" alt=\"{$title}\" loading=\"lazy\" draggable=\"false\" width=\"100%\" class=\"news-img-item\">
										</picture>
										<figcaption>
											<span>{$title}</span>
										</figcaption>
									</figure>
								</a>
							";
						}
					) ?>

				</div>
			</section>

			<section class="news-container">
				<figure>
					<picture>
						<source srcset="<?php echo  $base_image; ?>/modelos/lg/banner.jpg" media="(min-width:1069px)">
						<img src="<?php echo  $base_image; ?>/modelos/md/banner.jpg" width="100%" alt="NOVOS MODELOS ROLEX 2023" loading="lazy">
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