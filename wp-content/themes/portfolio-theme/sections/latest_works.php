<?php

	$posts_query = new WP_Query(array('post_type' => 'portfolios'));

?>

<div id="latest-works">
	
	<div class="container">
		
		<div class="row">
		
			<div class="marketing-main-text col-md-8 col-md-offset-2">
				
				<h1 class="marketing-header"><?php echo get_theme_mod('portfolio_header'); ?></h1>

				<p class="marketing-paragaph">
					<?php echo get_theme_mod('portfolio_text'); ?>
				</p>

			</div>

		</div>

	</div>

	<div class="container-fluid">

		<div class="row latest_works_grid">

			<?php

				while($posts_query->have_posts()):
					$posts_query->the_post();

					$title = get_the_title();

			?>

			<div class="col-md-3 portfolio-square">

				<?php if ( has_post_thumbnail(get_the_ID()) ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<?php the_post_thumbnail(); ?>
					</a>
				<?php endif; ?>

			</div>


			<?php endwhile; ?>
			

		</div>

	</div>

</div>