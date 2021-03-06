<?php
/**
 * The Template for displaying all single posts.
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', 'single' ); ?>

		<?php // _tk_content_nav( 'nav-below' ); ?>
		<?php _tk_pagination(); ?>

	<div class="container">
		<div class="col-xs-12 comments">
		<?php
			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() )
				comments_template();
		?>
		</div>
	</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>