<?php
/**
 * @package _tk
 */
?>


<?php // Styling Tip!

// Want to wrap for example the post content in blog listings with a thin outline in Bootstrap style?
// Just add the class "panel" to the article tag here that starts below.
// Simply replace post_class() with post_class('panel') and check your site!
// Remember to do this for all content templates you want to have this,
// for example content-single.php for the post single view. ?>

<article class="row" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<h2 class="page-title col-xs-12"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta col-xs-12">
			<?php _tk_posted_on(); ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', '_tk' ) );
				if ( $categories_list && _tk_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( ' in %1$s', '_tk' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() || is_archive() ) : // Only display Excerpts for Search and Archive Pages ?>
	<div class="entry-summary col-xs-12">
		<?php the_post_thumbnail( 'medium' ); ?>
		<span>
			<?php the_excerpt(); ?>
			<h4><a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i> Read More</a></h4>
		</span>
	</div><!-- .entry-summary -->
	<?php else : ?>
	<div class="entry-content col-xs-12">
		<?php the_post_thumbnail( 'medium' ); ?>
		<span>
			<?php the_excerpt(); ?>
			<h4><a href="<?php the_permalink(); ?>"><i class="fas fa-arrow-right"></i> Read More</a></h4>
		</span>
	</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta col-xs-12">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', '_tk' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', '_tk' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
