<?php
/**
 * @package _tk
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-fluid" id="content">
		<header class="row">
			<div class="col-xs-12 center bg-1">
				<?php single_post_title( '<h1>', '</h1>' ); ?>
				<div class="entry-meta content-single-test">
					<p><?php _tk_posted_on(); ?></p>
				</div><!-- .entry-meta -->
			</div>	
		</header><!-- .entry-header -->

	<div class="row fixed">
		<div class="entry-content col-md-9">
			<div class="entry-content-thumbnail">
				<?php the_post_thumbnail(); ?>
			</div>
			<?php the_content(); ?>
			<?php _tk_link_pages(); ?>
		</div><!-- .entry-content -->
		<div class="sidebar col-md-3 hidden-sm hidden-xs">
			<?php if (dynamic_sidebar( 'sidebar-1' ) ) : 
					get_sidebar('sidebar-1');
					endif;
				?>
		</div>

			<?php edit_post_link( __( 'Edit', '_tk' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-meta -->
	</div>
</article><!-- #post-## -->
