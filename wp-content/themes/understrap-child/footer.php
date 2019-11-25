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
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.js"></script>
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

<script src="http://atvdesign.ddev.site/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js"></script>
<script src="isotope.js"></script>
<script>
	

	function myFunction() {

		var $grid = $('.grid').isotope({
			itemSelector: '.grid-item',
			layoutMode: 'fitRows'
		});

		$grid.imagesLoaded().progress(function() {
		$grid.isotope('layout');
	});

		// bind filter button click
		$('.filters-button-group').on('click', 'button', function() {

			var filterValue = $(this).attr('data-filter');
			// use filterFn if matches value
			filterValue = filterFns[filterValue] || filterValue;
			$grid.isotope({
				filter: (this).attr('data-filter')
			});
		});
		// change is-checked class on buttons
		$('.button-group').each(function(i, buttonGroup) {
			var $buttonGroup = $(buttonGroup);
			$buttonGroup.on('click', 'button', function() {
				$buttonGroup.find('.is-checked').removeClass('is-checked');
				$(this).addClass('is-checked');
			});
		});
	}
</script>
<?php wp_footer(); ?>

</body>

</html>