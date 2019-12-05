<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

$container = get_theme_mod('understrap_container_type');
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull'); ?>

<div class="wrapper" id="wrapper-footer">


	<div class="<?php echo esc_attr($container); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php understrap_site_info(); ?>

					</div><!-- .site-info -->

				</footer><!-- #colophon -->

			</div>
			<!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->




<script>
	jQuery.noConflict();

	jQuery(document).ready(function() {

		var $g = jQuery('.grid').isotope({
			itemSelector: '.grid-item',
			layoutMode: 'fitRows',
			getSortData: {
				numatl: '.numatl',
				id: '.id',
				weight: function(itemElem) {
					var weight = jQuery(itemElem).find('.weight').text();
					return parseFloat(weight.replace(/[\(\)]/g, ''));
				}
			}
		});
		var ordenar = jQuery('.numatl').attr('data-sort-by');
		$g.isotope({
			sortBy: ordenar
		});




		jQuery('#filters').on('click', '.button', function() {

			var filterValue = jQuery(this).attr('data-filter');
			$g.isotope({

				filter: filterValue

			});

		});



		jQuery('#sorts').on('click', '.button', function() {
			var sortByValue = jQuery('.grid-item').attr('data-filter');

			$g.isotope({
				sortBy: sortByValue

			});
		});
	});

	jQuery('.button-group').each(function(i, buttonGroup) {
		var $buttonGroup = jQuery(buttonGroup);
		$buttonGroup.on('click', 'button', function() {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			jQuery(this).addClass('is-checked');
		});
	});
</script>
<style>
	.footer {
		background-color: black;
		color: white;
		display: grid;
		grid-template-columns: 40% auto auto;
	}

	.copy {
		padding: 2%;
		;
	}

	.contactar {
		padding: 2%;
	}

	.contactar input,
	textarea {
		margin: 2%;
	}

	.contactar img {
		width: 20px;
		height: 20px;

	}

	.copy,
	.contactar,
	.About {
		margin-top: 5%;
	}


	@media only screen and (max-width: 600px) {

		.footer {
			display: block;
		}
	}
</style>
<script>
	function doMail() {
		var email = "vgomez@ies-sabadell.cat";
		location.href = "mailto:" + email;
	}
</script>
<?php wp_footer(); ?>
<div class="footer">
	<div class="copy">
		<h3>Información</h3>
		<p>CopyRight</p>
		<p>About us</p>
		<p>Cookies</p>
	</div>
	<div class="About">
		<h3>Pagina Oficial</h3>
		<p>Esta pagina esta destinada a mis fotografias tal</p>
	</div>
	<div class="contactar">
		<h3>Contactar</h3>
		<a href="https://www.instagram.com/atvdesign/?hl=es"><img src="http://atvdesign.ddev.site/wp-content/uploads/2019/11/1b2ca367caa7eff8b45c09ec09b44c16-icono-de-instagram-logo-by-vexels.png" alt="Instagram">atvdeisgn</img></a>
		<br><a class="mailto" onclick="doMail();">
			<img src="http://atvdesign.ddev.site/wp-content/uploads/2019/11/4202011emailgmaillogomailsocialsocialmedia-115677_115624.png" alt="mail">atvdesign@gmail.com</img>
		</a>


	</div>

</div>



</body>

</html>