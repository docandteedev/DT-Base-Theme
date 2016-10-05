<?php /* Template Name: Events */ ?>

<?php

$past_events = array();
$new_events = array();

?>

<?php while (have_posts()) : the_post(); ?>
	
	<?php echo do_shortcode( '[rev_slider alias="events"]' ); ?>
	
    <div class="events-page-header">
		<div class="events-page-header-inner">
			<h2 class="events-page-header-title">Upcoming Events</h2>
		</div>
	</div>
	
	<?php /*<div class="content">
		<?php the_content(); ?>
	</div>*/ ?>
	
	<?php $the_query = new WP_Query( array(
		'post_type' => 'tribe_events',
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'order' => 'DESC',
		'orderby' => 'meta_value',
		'meta_type' => 'DATETIME',
		'meta_key' => '_EventStartDate',
		'eventDisplay' => 'custom'
	) );
	if ( $the_query->found_posts > 0 ) :
			$now = time();
			while ( $the_query->have_posts() ) : $the_query->the_post(); $id = get_the_ID();
				
				$start = get_post_meta( $id, '_EventStartDate', true );
				$end = get_post_meta( $id, '_EventEndDate', true );
				$start = ( empty( $start ) ) ? null : strtotime( $start );
				$end = ( empty( $end ) ) ? null : strtotime( $end );
				
				$addto = &$new_events;
				if( $start < $now && $end < $now ) {
					$addto = &$past_events;
				}
				
				if ( !empty( $end ) && date( 'Y-m-d', $start ) == date( 'Y-m-d', $end ) ) {
					$dates = date( 'D, jS F Y g:i a', $start ) . ' - ' . date( 'g:i a', $end );
				} else {
					$dates = date( 'D, jS F Y g:i a', $start ) . ' - ' . date( 'D, jS F Y g:i a', $end );
				}
				
				$thumb = ( has_post_thumbnail() ) ? get_the_post_thumbnail( $id, 'medium-large' ) : null;
				
				$content = '<p>' . get_the_excerpt() . '</p>';
				
				$year = date( 'Y', $start );
				$month = date( 'n', $start );
				
				if ( !isset( $addto[ $year ] ) ) {
					$addto[ $year ] = array();
				}
				if ( !isset( $addto[ $year ][ $month ] ) ) {
					$addto[ $year ][ $month ] = array();
				}
				
				$venue = get_post_meta( $id, '_EventVenueID', false );
				if ( empty( $venue ) ) {
					$venue = null;
				} else {
					foreach( $venue as $v ) {
						$venue.= ( empty( $venue ) ) ? '' : ', ';
						$venue.= get_the_title( $v );
					}
				}
				
				$addto[ $year ][ $month ][ $id ] = array(
					'title' => the_title( '', '', false ),
					'dates' => $dates,
					'thumb' => $thumb,
					'content' => $content,
					'link' => get_permalink(),
					'venue' => $venue
				);
				
			endwhile;
	endif; wp_reset_postdata(); wp_reset_query(); ?>
	
	<?php if ( !empty( $new_events ) ) : ?>
	<div id="tribe-events-content" class="tribe-events-list">
		<div class="tribe-events-loop">
		<?php foreach( $new_events as $year_num => $year ) :
			foreach( $year as $month_num => $month ) : ?>
					
					<span class="tribe-events-list-separator-month">
						<span><?php
						
						$dateObj   = DateTime::createFromFormat('!m', $month_num);
						echo $dateObj->format('F') . ' ' . $year_num;
						
						?></span>
					</span>
					
					<?php foreach( $month as $id => $event ) : ?>
						
						<div id="post-<?php echo $id; ?>" class="type-tribe_events post-<?php echo $id; ?> tribe-clearfix tribe-events-venue-280 tribe-events-first tribe-events-last">
							<div class="event-inner">
								<div class="event-inner-left">
									<div class="tribe-events-event-image">
										<?php if ( !empty( $event[ 'thumb' ] ) ) : ?>
											<a href="<?php echo $event[ 'link' ]; ?>">
												<?php echo $event[ 'thumb' ]; ?>
											</a>
										<?php endif; ?>
									</div>
								</div>
								<div class="event-inner-right">
									
									<h2 class="tribe-events-list-event-title"><a class="tribe-event-url" href="<?php echo $event[ 'link' ]; ?>"><?php echo $event[ 'title' ]; ?></a></h2>
									
									<div class="tribe-events-event-meta">
										<div class="tribe-event-schedule-details">
											<span class="tribe-event-date-start"><?php echo $event[ 'dates' ]; ?></span>
										</div>
										<div class="tribe-events-venue-details">
											<span class="author fn org"><?php echo $event[ 'venue' ]; ?></span>
										</div>
									</div>
									
									<div class="tribe-events-list-event-description tribe-events-content">
										<?php echo $event[ 'content' ]; ?>
									</div>
									
									<a href="<?php echo $event[ 'link' ]; ?>" class="tribe-events-read-more">Find out more...</a>
									
								</div>
							</div>
						</div>
						
					<?php endforeach; ?>
					
			<?php endforeach;
		endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
	
	<?php if ( !empty( $past_events ) ) : ?>
	<div class="events-page-header">
		<div class="events-page-header-inner">
			<?php the_title( '<h2 class="events-page-header-title">Past ', '</h2>' ); ?>
		</div>
	</div>
	<div id="tribe-events-content" class="tribe-events-list">
		<div class="tribe-events-loop">
		<?php foreach( $past_events as $year_num => $year ) :
			foreach( $year as $month_num => $month ) : ?>
					
					<span class="tribe-events-list-separator-month">
						<span><?php
						
						$dateObj   = DateTime::createFromFormat('!m', $month_num);
						echo $dateObj->format('F') . ' ' . $year_num;
						
						?></span>
					</span>
					
					<?php foreach( $month as $id => $event ) : ?>
						
						<div id="post-<?php echo $id; ?>" class="type-tribe_events post-<?php echo $id; ?> tribe-clearfix tribe-events-venue-280 tribe-events-first tribe-events-last">
							<div class="event-inner">
								<div class="event-inner-left">
									<div class="tribe-events-event-image">
										<?php if ( !empty( $event[ 'thumb' ] ) ) : ?>
											<a href="<?php echo $event[ 'link' ]; ?>">
												<?php echo $event[ 'thumb' ]; ?>
											</a>
										<?php endif; ?>
									</div>
								</div>
								<div class="event-inner-right">
									
									<h2 class="tribe-events-list-event-title"><a class="tribe-event-url" href="<?php echo $event[ 'link' ]; ?>"><?php echo $event[ 'title' ]; ?></a></h2>
									
									<div class="tribe-events-event-meta">
										<div class="tribe-event-schedule-details">
											<span class="tribe-event-date-start"><?php echo $event[ 'dates' ]; ?></span>
										</div>
										<div class="tribe-events-venue-details">
											<span class="author fn org"><?php echo $event[ 'venue' ]; ?></span>
										</div>
									</div>
									
									<div class="tribe-events-list-event-description tribe-events-content">
										<?php echo $event[ 'content' ]; ?>
									</div>
									
									<a href="<?php echo $event[ 'link' ]; ?>" class="tribe-events-read-more">Find out more...</a>
									
								</div>
							</div>
						</div>
						
					<?php endforeach; ?>
					
			<?php endforeach;
		endforeach; ?>
		</div>
	</div>
	<?php endif; ?>
	
<?php endwhile; ?>