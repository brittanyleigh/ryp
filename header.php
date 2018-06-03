<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>

<header id="masthead" class="site-header" role="banner">
	<div class="container-fluid">
		<div class="row flex">
			<div class="site-header-inner col-sm-4 col-xs-12">
				<div class="site-branding">

					<?php
					// check to see if the logo exists and add it to the page
					if ( get_theme_mod( 'logo' ) ) : ?> 
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
						<img src="<?php echo get_theme_mod( 'logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" >
					</a>
					<?php // add a fallback if the logo doesn't exist
					else : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<p class="site-description lead"><?php bloginfo( 'description' ); ?></p>	 
					<?php endif; ?>
					
				</div>
			</div>
			<div class="col-sm-8 col-xs-12 site-header-widget">
				<?php if (dynamic_sidebar( 'header-widget' ) ) : 
					get_sidebar('header-widget');
					endif;
				?>
			</div>
		</div>
	</div><!-- .container -->
</header><!-- #masthead -->

<nav class="site-navigation">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>
	<div class="container-fluid">
		<div class="row">
			
			<div class="site-navigation-inner col-xs-12">
					<div class="navbar navbar-default container-fluid">
						<div class="navbar-header row">
							<a href="/events">
								<div class="col-xs-4 hidden-sm hidden-md hidden-lg mobile-nav mn-1">
									<i class="far fa-calendar-alt"></i> EVENTS
								</div>
							</a>
							<a href="/contact">
								<div class="col-xs-4 hidden-sm hidden-md hidden-lg mobile-nav mn-2">
									<i class="far fa-envelope"></i> CONTACT
								</div>
							</a>
							<div class="col-xs-4 hidden-sm hidden-md hidden-lg mobile-nav mn-3" data-toggle="collapse" data-target="#navbar-collapse">
								<i class="fas fa-angle-down"></i> MORE
							</div>
							<span class="sr-only"><?php _e('Toggle navigation','_tk') ?> </span>
							<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
							<!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>-->
						</div>

						<!-- The WordPress Menu goes here -->
						<?php wp_nav_menu(
							array(
								'theme_location' 	=> 'primary',
								'depth'             => 2,
								'container'         => 'nav',
								'container_id'      => 'navbar-collapse',
								'container_class'   => 'collapse navbar-collapse',
								'menu_class' 		=> 'nav navbar-nav',
								'fallback_cb' 		=> 'wp_bootstrap_navwalker::fallback',
								'menu_id'			=> 'main-menu',
								'walker' 			=> new wp_bootstrap_navwalker()
							)
						); ?>

					</div><!-- .navbar -->
			</div><!-- site-nav -->
		</div>
	</div><!-- .container -->
</nav><!-- .site-navigation -->



<div class="main-content">
<?php // substitute the class "container-fluid" below if you want a wider content area ?>

			

