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
					<h1 class="tituloTodas">Animales</h1>
				

					<div class="grid" data-masonry='{ "columnWidth": 1, "itemSelector": ".grid-item" }'>

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

								?>
								<div class='grid-item'>





									<?php //Esto sirve para mostrar imagenes Destacadas
											?>
									<?php the_post_thumbnail('full') //Esto sirve para mostrar imagenes Destacadas
											?>
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
