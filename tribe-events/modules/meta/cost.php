<?php // Event Cost
/**
 * Single Event Meta (Details) Template
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe-events/modules/meta/details.php
 *
 * @package TribeEventsCalendar
 */

$cost = tribe_get_formatted_cost();
if ($cost == "Free"){
	$excl = '!';
} else {
	$excl = '';
}

	if ( ! empty( $cost ) ) : ?>
<div class="tribe-events-meta-group tribe-events-meta-group-details">
	<dl>
		<dd class="center cost"> <?php esc_html_e( $cost ); echo $excl;?> </dd>
	</dl>
</div>
	<?php endif ?>
