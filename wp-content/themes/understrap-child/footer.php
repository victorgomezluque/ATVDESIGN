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
	jQuery('#sorts').on(function() {
		var sortByValue = jQuery(this).attr('data-sort-by');

		$g.isotope({
			sortBy: sortByValue

		});
	});

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

		
		jQuery('#filters').on('click', '.button', function() {
			
			var filterValue = jQuery(this).attr('data-filter');
			$g.isotope({

				filter: filterValue

			});
			
		});



		jQuery('#sorts').on('click', '.button', function() {
			var sortByValue = jQuery(this).attr('data-sort-by');

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
<?php wp_footer(); ?>

</body>

</html>