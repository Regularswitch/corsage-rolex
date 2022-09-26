<?php get_header(); ?>

<?php include __DIR__ . "/includes/boot.php"; ?>

<div class="container-wrap">

	<div class="container">

		<?php include __DIR__ . "/includes/menu-header.php"; ?>

		<div class="rlx-iframe---" style="padding: 0;">
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
				})(window, document, "script", "rlxCornerCallback", "rlx-corner", "b30a73c76d56f5d9e259edc33dae1db7", "https://www.corsage.com.br/politica-privacidade.php", "pt-br", "watches");
			</script>
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