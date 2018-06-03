<?php
/**
 * The template for displaying Archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package _tk
 */

get_header(); ?>

	<?php // add the class "panel" below here to wrap the content-padder in Bootstrap style ;) ?>
	<div class="content-padder container-fluid">

	

		<?php if ( have_posts() ) : ?>

			<header>
				<div class="row">
				<div class="col-xs-12 center bg-1">
				<h1 class="page-title">Board Members
				</h1>
			</div>
			</div>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="fixed row board-member">
				<div class="col-xs-12 center">
					<h2><?php the_title(); ?> <span class="hidden-xs">|</span><br class="hidden-sm hidden-md hidden-lg"> 
					<span class="info"><?php the_field( 'title' ); ?> 
					<?php if (get_field( 'email' )) : ?>
						<a href="mailto: <?php the_field( 'email' ); ?>"><i class="fas fa-envelope"></i></a>
					<?php endif; ?>
					<?php if (get_field( 'twitter' )) : ?>
						<a href="https://twitter.com/<?php the_field( 'twitter' ); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					<?php if (get_field( 'linkedin' )) : ?>
						<a href="https://www.linkedin.com/in/<?php the_field( 'linkedin' ); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
					<?php endif; ?>
				</span>
					</h2>
				</div>
				<div class="col-sm-4 col-xs-12 flex">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}  ?>
				</div>
				<div class="col-sm-8 col-xs-12">
					<?php the_field( 'bio' ); ?>
				</div>
			</div>
			<?php endwhile; ?>
		
			<?php // _tk_content_nav( 'nav-below' ); ?>
            <?php _tk_pagination(); ?>
		<?php else : ?>

			<?php get_template_part( 'no-results', 'archive' ); ?>

		<?php endif; ?>

	</div><!-- .content-padder -->

<?php get_footer(); ?>
