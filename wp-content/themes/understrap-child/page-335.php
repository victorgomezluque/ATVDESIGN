<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();

$container = get_theme_mod('understrap_container_type');

?>
<style>
	body {
		background-image: url(http://atvdesign.ddev.site/wp-content/uploads/2019/11/47978540501_393134eae0_o.jpg);
	}

	.todas {

		animation-name: fideIN;
		animation-duration: 4s;
	}

	@-webkit-keyframes fideIN {
		from {
			opacity: 0;
		}

		to {
			opacity: 1;
		}
	}
</style>


<div class="todas">
	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

			<div class="row">

				<!-- Do the left sidebar check -->
				<?php get_template_part('global-templates/left-sidebar-check'); ?>

				<main class="site-main" id="main">



					<div class="grid">

						<?php
						$args = array(
							'post_status' => 'all',
							'post_type' => 'foto',
							'cat' => '7'

						);




						$category_posts = new WP_Query($args);


						if ($category_posts->have_posts()) :
							while ($category_posts->have_posts()) :
								$category_posts->the_post();


								?>



								<div class='grid-item joya' data-filter="joya">
									<p class="numatl" data-sort-by="numatl"> <?php echo rand(5, 15); ?></p>

									<?php the_post_thumbnail('medium') ?>

								</div>
							<?php
								endwhile;
							else :
								?>
							Vaya, no hay entradas.
						<?php
						endif;
						?>


					</div>





					<?php while (have_posts()) : the_post(); ?>

						<?php get_template_part('loop-templates/content', 'page'); ?>

						<?php
							// If comments are open or we have at least one comment, load up the comment template.
							if (comments_open() || get_comments_number()) :
								comments_template();
							endif;
							?>

					<?php endwhile; // end of the loop. 
					?>

				</main><!-- #main -->

				<!-- Do the right sidebar check -->
				<?php get_template_part('global-templates/right-sidebar-check'); ?>

			</div><!-- .row -->

		</div><!-- #content -->

	</div><!-- #page-wrapper -->
</div>

<?php get_footer();
