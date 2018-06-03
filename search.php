<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package _tk
 */

get_header(); ?>

	<?php if ( have_posts() ) : ?>

		<header class="container-fluid">
			<div class="row">
				<div class="col-xs-12 center bg-1">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', '_tk' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</div>
			</div>
		</header><!-- .page-header -->

		<?php // start the loop. ?>
		<div class="row fixed">
			<div class="col-xs-12">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'search' ); ?>

		<?php endwhile; ?>
			</div>
		</div>
		<?php _tk_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'search' ); ?>

	<?php endif; // end of loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>