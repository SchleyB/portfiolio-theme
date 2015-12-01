<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package portfolio-theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'portfolio-theme' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<div id="top-menu">

			<div class="container">

				<div class="row">

					<span class="phone-email">
						<span class="phone-email-icon glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<p class="phone-email-text"><a href="mailto:<?php echo get_theme_mod('email'); ?>"><?php echo get_theme_mod('email'); ?></a></p>
					</span>
					<span class="phone-email">
						<span class="phone-email-icon glyphicon glyphicon-phone" aria-hidden="true"></span>
						<p class="phone-email-text"><a href="tel:<?php echo get_theme_mod('phone'); ?>"><?php echo get_theme_mod('phone'); ?></a></p>
					</span>

				</div>

			</div>

		</div>
			
		<nav id="site-navigation" class="navbar navbar-default">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand logo-img-a" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<?php if ( get_theme_mod('logo') != '' ) : ?>
						<img class="logo-img" src="<?php echo get_theme_mod('logo'); ?>">
				<?php else : ?>
					<?php bloginfo('title'); ?>
				<?php endif; // End header image check. ?>
			  </a>
		      
		    </div>

		        <?php 
		        $args = array(
		        		'theme_location' => 'primary',
		        		'container' => 'div',
		        		'container_class' => 'collapse navbar-collapse',
		        		'container_id' => 'bs-example-navbar-collapse-1',
		        		'menu_id' => 'primary-menu',
		        		'menu_class' => 'nav navbar-nav navbar-left',
		        		'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
		        	);

		        $menu = wp_nav_menu($args); ?>

		    <span id="search-icon" class="glyphicon glyphicon-search" aria-hidden="true"></span>
		 
		  </div><!-- /.container -->
		</nav>

	</header><!-- #masthead -->

	<div id="content" class="site-content">
