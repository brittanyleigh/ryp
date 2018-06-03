<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version  4.3
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();
$cost = tribe_get_formatted_cost();

$date_col = 'col-sm-4';
$venue_col = 'col-sm-4';
$cost_col = 'col-sm-4';

if (!$cost && !tribe_get_venue()) {
	$date_col = 'col-xs-12';
} elseif (!$cost || !tribe_get_venue()) {
	$date_col = 'col-sm-4 col-sm-offset-2';
	$venue_col = 'col-sm-4';
	$cost_col = 'col-sm-4';
}

?>

<div id="tribe-events-content" class="tribe-events-single container-fluid">

	<!-- Notices -->
	<?php tribe_the_notices() ?>
	<div class="row">
		<div class="col-xs-12 center bg-1">
			<?php the_title( '<h1>', '</h1>' ); ?>
		</div>
	</div>

	<div class="row default-padding ryp-event-single fixed">
		<div class="col-xs-12 center">
			<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
		</div>
		<div class="ryp-event-details col-xs-12">
			<h3 class="center bg-1">Event Details</h3>
			<div class="<?php echo $date_col; ?> center">
				<h4><i class="far fa-calendar-alt"></i> Date &amp; Time</h4>
				<?php tribe_get_template_part( 'modules/meta/details' ); ?>
			</div>
			<?php if (tribe_get_venue()) : ?>
				<div class="<?php echo $venue_col; ?> center">
					<h4><i class="fas fa-map-marker-alt"></i> Location</h4>
					<?php tribe_get_template_part( 'modules/meta/venue' ); ?>
				</div>
			<?php endif; 
			if ($cost) : ?>
				<div class="<?php echo $cost_col; ?> center">
					<h4><i class="fas fa-dollar-sign"></i> Cost</h4>
					<?php tribe_get_template_part( 'modules/meta/cost' ); ?>
				</div>
			<?php endif; 
			$website = tribe_get_event_website_url(); 
			if ( ! empty( $website ) ) : ?>
			<div class="col-xs-12 center">
				<a href="<?php echo $website ?>" role="button" class="btn btn-primary" target="_blank">RSVP / More Info</a>
			</div>
			<?php endif; ?>
		</div>
		<div class="col-xs-12">
			<?php the_content(); ?>
			<p class="tribe-events-back center">
				<a href="<?php echo esc_url( tribe_get_events_link() ); ?>"> <?php printf( '&laquo; ' . esc_html_x( 'Back to All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
			</p>
		</div>
	</div>



	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-header -->

	<?php while ( have_posts() ) :  the_post(); ?>

	<?php endwhile; ?>

	<!-- Event footer -->
	<div id="tribe-events-footer">
		<!-- Navigation -->
		<h3 class="tribe-events-visuallyhidden"><?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?></h3>
		<ul class="tribe-events-sub-nav">
			<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>&laquo;</span> %title%' ) ?></li>
			<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>&raquo;</span>' ) ?></li>
		</ul>
		<!-- .tribe-events-sub-nav -->
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
