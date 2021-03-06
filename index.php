<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

	<div class="container-fluid" id="content">

	<div class="row">
		<div class="col-xs-12 center bg-1">
			<?php single_post_title( '<h1>', '</h1>' ); ?>
		</div>
	</div>
	<?php if ( have_posts() ) : ?>

	<div class="fixed row">
		<div class="col-md-9">
		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php
				/* Include the Post-Format-specific template for the content.
				 * If you want to overload this in a child theme then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'content', get_post_format() );
			?>

		<?php endwhile; ?>
		</div>
		<div class="sidebar col-md-3 hidden-sm">
			<?php if (dynamic_sidebar( 'sidebar-1' ) ) : 
					get_sidebar('sidebar-1');
					endif;
				?>
		</div>
	</div>
		<?php // _tk_content_nav( 'nav-below' ); ?>
        <?php _tk_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'no-results', 'index' ); ?>

	<?php endif; ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>