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



$container = get_theme_mod('understrap_container_type');

?>

<style>
	body {
		background-color: black;
		margin-left: 15%;
	}

	.separador {
		height: 60px;
	}

	.boton {
		margin-left: 40%;
		font-size: 20px;
		background-color: transparent;
		border: none;
		color: white;
		text-decoration: none;
		font-family: 'Courier New', Courier, monospace;
	}

	.boton1 {
		margin-left: 41%;
		opacity: 0.6;
	}

	.boton1:hover {
		opacity: 1;
	}

	.boton:hover {
		animation-name: cambio;
		animation-duration: 4s;
	}

	@-webkit-keyframes cambio {
		from {
			color: red;
		}

		to {
			color: yellow;
		}
	}
</style>


<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">


			<img src="http://ATVDESIGN.ddev.site/wp-content/uploads/2019/11/24331.jpg" alt="foto incial"><br>
			<div class="separador"></div>



			<a href="http://atvdesign.ddev.site/inicio/" class="boton">ENTRAR </a>
			<br><br>
			<a href="https://www.instagram.com" class="boton1"><img src="http://ATVDESIGN.ddev.site/wp-content/uploads/2019/11/Instagram.png" alt="insta"></a>
			<!-- Do the left sidebar check -->
			<?php get_template_part('global-templates/left-sidebar-check'); ?>

			<main class="site-main" id="main">

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