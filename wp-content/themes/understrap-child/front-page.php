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
	@import url('https://fonts.googleapis.com/css?family=Roboto&display=swap');

	body {
		font-family: 'Roboto', sans-serif;
		background-color: black;
		margin-left: 15%;
		background-image: url(http://atvdesign.ddev.site/wp-content/uploads/2019/11/castillo4-ke8F-1350x900@abc.jpg);
		background-repeat: none;
		background-repeat: no-repeat;
		background-size: 100%;
		background-attachment: fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		animation-name:  fideIN;
		animation-duration: 4s;

	}

	.separador {
		height: 70%;
	}

	.boton {
		margin-left: 40%;
		font-size: 20px;
		background-color: transparent;
		border: none;
		color: white;
		text-decoration: none;
	}

	.boton1 {
		margin-left: 41%;
		opacity: 0.6;
	}

	.boton1:hover {
		opacity: 1;
	}

	
	@-webkit-keyframes cambio {
		from {
			color: white;
		}

		to {
			color: grey;
		}
	}
	@-webkit-keyframes fideIN {
		from {
		opacity: 0;}

		to {
			opacity: 1;
		}
	}

	.titulo {
		font-size: 40px;
		color: white;
		margin-left: 30%;
	}

	a {
		list-style: none;
		text-decoration: none;
	}

	p {
		color: white;
		font-size: 20px;
	}

	p:hover{
		animation-name: cambio;
  	animation-duration: 5s;
	}
	.header {
		display: grid;
		grid-template-columns: auto auto auto;
	}

	.descripcion {
		width: 70%;
		background-color: rgba(0, 0, 0, 0.5);
		padding: 3%;
	}


	.redesSociales img {
		width: 20px;
		height: 20px;

	}

	.redesSociales {
		margin-left: -15%;
	}

	.separacion2 {
		height: 8%;
	}
</style>


<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr($container); ?>" id="content" tabindex="-1">

		<div class="row">


			<div class="separador"></div>
			<div class="fondo">
				<div class="Incio">
					<p class="titulo">ATVDESIGN</p>
					<div class="header">
						<a href=" http://atvdesign.ddev.site/mi-pagina/ ">
							<p>MI PAGINA</p>
						</a>
						<a href="http://atvdesign.ddev.site/maera">
							<p>MAREA</p>
						</a>
						<a href="http://atvdesign.ddev.site/isotope/">
							<p>MODA</p>
						</a>

					</div>
					<div class="separacion2"></div>

					<div class="redesSociales">
						<a href="https://www.instagram.com/atvdesign/?hl=es"><img src="http://atvdesign.ddev.site/wp-content/uploads/2019/11/1b2ca367caa7eff8b45c09ec09b44c16-icono-de-instagram-logo-by-vexels.png" alt="Instagram"></a>
						<a href="https://www.flickr.com/photos/atvdesign"><img src="http://atvdesign.ddev.site/wp-content/uploads/2019/11/d51ab2c086a7046cded42a02cb44c8ab-icono-de-flickr-logo-by-vexels.png" alt="flick"></a>
					</div>



					<br><br>
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
			</div>

		</div><!-- #content -->

	</div><!-- #page-wrapper -->