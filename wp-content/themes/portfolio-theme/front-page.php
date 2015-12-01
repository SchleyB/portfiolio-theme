<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package one-page-ecomm
 */

get_header(); ?>

		<div id="primary">
			<main id="main" class="site-main" role="main">

				<?php get_template_part( 'sections/main' ); ?>

				<?php get_template_part( 'sections/marketing' ); ?>

				<?php get_template_part( 'sections/latest_works' ); ?>

			</main><!-- #main -->
		</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
