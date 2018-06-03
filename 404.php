<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package _tk
 */

get_header(); ?>
<div class="container-fluid" id="content">
	<div class="row">
		<div class="col-xs-12 center bg-1">
			<h1><?php _e( 'Oops! Something went wrong here.', '_tk' ); ?></h1>
		</div>
	</div>
	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div class="fixed row">
		<div class="col-xs-12">
	<section class="content-padder error-404 not-found">

		<header>
			<h2 class="page-title"></h2>
		</header><!-- .page-header -->

		<div class="page-content row center">
			<div class="col-xs-12">

			<p><?php _e( 'Nothing could be found at this location. Maybe try a search?', '_tk' ); ?></p>

			<?php get_search_form(); ?>
			</div>
		</div><!-- .page-content -->

	</section><!-- .content-padder -->
</div></div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>