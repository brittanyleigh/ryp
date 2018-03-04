<?php

/* Template Name: Home */
/**
 *
 * @package _tk
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<div class="row">
		<div class="col-xs-12 hero-cta center default-padding bg-1">
			<?php if (dynamic_sidebar( 'hero' ) ) : 
				get_sidebar('hero');
				endif;
			?>
		</div>
		<div class="hero col-xs-12 no-padding bg-1">
			<img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" />
		</div>
	</div>

	<div class="row events-home default-padding">
		<div class="col-xs-12 center">
			<h2>Upcoming Events in Rochester, NY</h2>
		</div>
	<?php
		$counter = 0;
		$today = date("Y-m-d");
		$events = tribe_get_events(
			array(
				'posts_per_page'   => 3,
				'start_date'   => "$today",
			)
		);
		foreach( $events as $event ) {
			$title = get_the_title( $event );
			$link = tribe_get_event_link( $event );
			$date = tribe_get_start_date($event, false, $format = "F j @ g:i a" );
    		$start = tribe_get_start_date($event, false, $format = "g:i a" );
    		$end = tribe_get_end_date($event, false, $format = "g:i a" );
    		$counter += 1;
    		if ($counter == 3) : ?>
    		<div class="col-md-4 col-sm-6 col-sm-offset-3 col-md-offset-0 col-xs-12">
    		<?php else : ?>
    		<div class="col-md-4 col-sm-6 col-xs-12">
    		<?php endif; ?>
    			<a href="<?php echo $link ?>">
    				<div class="photo-bg">
		    			<?php echo get_the_post_thumbnail( $event, 'full', array( 'class' => 'home-event-photo' ) ); ?>
		    		</div>
	    		</a>
    			<h4><a href="<?php echo $link ?>"><?php echo $title?></a></h4>
    			<h5><?php echo $date . ' - ' . $end?></h5>
    		</div>
    		<?php if ($counter == 2) : ?>
    			<div class="col-sm-12 hidden-md hidden-lg hidden-xs"></div>
    		<?php endif; } ?>

    		<div class="col-xs-12 center">
    			<a href="#" role="button" class="btn btn-primary">
    				View More Events
    			</a>
    		</div>
	</div>

	<div class="row bg-1">
		<div class="col-xs-12 center default-padding tagline">
			<h2><?php the_field( 'tagline' ); ?></h2>
			<h3 class="btn btn-primary newsletter"><?php the_field( 'button_text' ); ?></h3>
		</div>
	</div>


	<div class="row default-padding icons">
		<div class="col-sm-4 icon">
			<a href="<?php the_field( 'icon_link_1' ); ?>">
				<?php $icon_1 = get_field( 'icon_1' ); ?>
				<?php if ( $icon_1 ) { ?>
					<img src="<?php echo $icon_1['url']; ?>" alt="<?php echo $icon_1['alt']; ?>" />
				<?php } ?>
			</a>
			<?php the_field( 'icon_text_1' ); ?>
		</div>
		<div class="col-sm-4 icon">
			<a href="<?php the_field( 'icon_link_2' ); ?>">
				<?php $icon_2 = get_field( 'icon_2' ); ?>
				<?php if ( $icon_2 ) { ?>
					<img src="<?php echo $icon_2['url']; ?>" alt="<?php echo $icon_2['alt']; ?>" />
				<?php } ?>
			</a>
			<?php the_field( 'icon_text_2' ); ?>
		</div>
		<div class="col-sm-4 icon">
			<a href="<?php the_field( 'icon_link_3' ); ?>">
				<?php $icon_3 = get_field( 'icon_3' ); ?>
				<?php if ( $icon_3 ) { ?>
					<img src="<?php echo $icon_3['url']; ?>" alt="<?php echo $icon_3['alt']; ?>" />
				<?php } ?>
			</a>
			<?php the_field( 'icon_text_3' ); ?>
		</div>
		<div class="col-xs-12"></div>
		<div class="col-sm-4 col-sm-offset-2 icon">
			<a href="<?php the_field( 'icon_link_4' ); ?>">
				<?php $icon_4 = get_field( 'icon_4' ); ?>
				<?php if ( $icon_4 ) { ?>
					<img src="<?php echo $icon_4['url']; ?>" alt="<?php echo $icon_4['alt']; ?>" />
				<?php } ?>
			</a>
			<?php the_field( 'icon_text_4' ); ?>
		</div>
		<div class="col-sm-4 icon">
			<a href="<?php the_field( 'icon_link_5' ); ?>">
				<?php $icon_5 = get_field( 'icon_5' ); ?>
				<?php if ( $icon_5 ) { ?>
					<img src="<?php echo $icon_5['url']; ?>" alt="<?php echo $icon_5['alt']; ?>" />
				<?php } ?>
			</a>
			<?php the_field( 'icon_text_5' ); ?>
		</div>
	</div>

	<div class="row default-padding sponsors">
		<div class="col-xs-12">
			<?php the_field( 'sponsors' ); ?>
		</div>
	</div>

	<?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>
