<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package portfolio-theme
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

	<div id="main-background" style="background: url(<?php if (get_theme_mod( 'background_img' )) : echo get_theme_mod( 'background_img'); else: echo get_template_directory_uri().'/images/desk.jpg'; endif; ?>)">

		<div class="container">
			
			<div class="hero-block">
				
				<h1><?php echo get_the_title(); ?></h1>

			</div>

		</div>

	</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="container">

			<div class="row">
				
				<div class="col-md-6 col-md-offset-3 product-image">
				
					<?php if ( has_post_thumbnail(get_the_ID()) ) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
						<?php the_post_thumbnail(); ?>
						</a>
					<?php endif; ?>

				</div>

			</div>

			<div class="col-md-8 col-md-offset-2 product-desc">

				<?php the_content(); ?>

			</div>
		</div>

		<div class="container-fluid">

			<div class="row portfolio-gallery">

				<?php

					if(get_post_meta(get_the_ID(), '_portfolio_image1')){
						$image_one = get_post_meta(get_the_ID(), '_portfolio_image1');
						echo '<div class="col-md-6"><img src="' . $image_one[0] . '"></div>';
					}

					if(get_post_meta(get_the_ID(), '_portfolio_image2')){
						$image_two = get_post_meta(get_the_ID(), '_portfolio_image2');
						echo '<div class="col-md-6"><img src="' . $image_two[0] . '"></div>';
					}

					if(get_post_meta(get_the_ID(), '_portfolio_image3')){
						$image_three = get_post_meta(get_the_ID(), '_portfolio_image3');
						echo '<div class="col-md-6"><img src="' . $image_three[0] . '"></div>';
					}

					if(get_post_meta(get_the_ID(), '_portfolio_image4')){
						$image_four = get_post_meta(get_the_ID(), '_portfolio_image4');
						echo '<div class="col-md-6"><img src="' . $image_four[0] . '"></div>';
					}

						
				?>

			</div>

		</div>				

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>
