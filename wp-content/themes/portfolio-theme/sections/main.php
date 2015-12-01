<div id="main-background" style="background: url(<?php if (get_theme_mod( 'background_img' )) : echo get_theme_mod( 'background_img'); else: echo get_template_directory_uri().'/images/desk.jpg'; endif; ?>)">

	<div class="container">
		
		<div class="hero-block">
			
			<h1><?php echo get_theme_mod('hero_header'); ?></h1>
			<p><?php echo get_theme_mod('hero_subtext'); ?></p>
			<button type="button" class="btn btn-success"><?php echo get_theme_mod('hero_button'); ?></button>

		</div>

	</div>

</div>