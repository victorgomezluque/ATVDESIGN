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


<div class="todas">
	<div class="wrapper" id="page-wrapper">

		<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

			<div class="row">

				<!-- Do the left sidebar check -->
				<?php get_template_part('global-templates/left-sidebar-check'); ?>

				<main class="site-main" id="main">

					<div id="filters" class="button-group filter-button-group">
						<button class="button is-checked" data-filter="*">MOSTRAR TODO</button>
						<button class="button" data-filter=".animal">ANIMALES</button>
						<button class="button" data-filter=".comida">COMIDAS</button>
						<button class="button" data-filter=".joya"> MODA</button>
					</div>
					

					
					<div class="grid">

						<?php
						$args = array(
							'post_status' => 'all',
							'post_type' => 'foto',
							'cat' => '3'

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

						<?php
						$args = array(
							'post_status' => 'all',
							'post_type' => 'foto',
							'cat' => '5'

						);




						$category_posts = new WP_Query($args);


						if ($category_posts->have_posts()) :
							while ($category_posts->have_posts()) :
								$category_posts->the_post();


								$slug = get_post_field('post_name');
								?>


								<div class='grid-item animal' data-filter="animal">
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

						<?php
						$args = array(
							'post_status' => 'all',
							'post_type' => 'foto',
							'cat' => '4'

						);




						$category_posts = new WP_Query($args);


						if ($category_posts->have_posts()) :
							while ($category_posts->have_posts()) :
								$category_posts->the_post();


								$slug = get_post_field('post_name');
								?>


								<div class='grid-item comida' data-filter="comida">
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
