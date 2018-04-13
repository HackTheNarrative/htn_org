<?php
/**
 *  query for events timeline custom post type
 *
 */
  if ( class_exists( 'Tribe__Events__Main' ) ) { ?>
<div class="row">
<?php 
$args = array( 'post_type' => 'tribe_events', 'posts_per_page' => $limit, 'order' => $order, 'readmore' => $readmore );

$loop = new WP_Query( $args ); 

while ( $loop->have_posts() ) : $loop->the_post(); 
 ?>
<ul class="timeline">
  <?php if ($loop->current_post % 2 == 0): ?>
  <li class="timeline-right event">
    <div class="timeline-panel">
      <div class="t-heading"> 
        <h2><?php the_title(); ?></h2>
        <div class="metaevents">
			    <i class="fa fa-clock-o"></i> <?php  echo tribe_events_event_schedule_details(); ?>
        </div>
        <div class="metaevents">
			    <i class="fa fa-map-marker"></i> <?php  echo tribe_get_venue(); ?>
        </div>
      </div>
      <div class="t-body">
        <p> 
            <?php 
            $eventstext = get_the_excerpt();
            $trimmed_content = wp_trim_words( $eventstext, 18 );
            echo $trimmed_content;
            ?>
			  </p>
        <div>
          <?php printf('<a href="%1s">%2s</a>',get_permalink(), $readmore);?>
        </div>
      </div>
	  </div>
  </li>
  <?php else: ?>
  <li class="timeline-left event">
    <div class="timeline-panel">
      <div class="t-heading"> 		   
        <h2><?php the_title(); ?></h2>
        <div class="metaevents">
			    <i class="fa fa-clock-o"></i> <?php  echo tribe_events_event_schedule_details(); ?>
        </div>
		    <div class="metaevents">
			    <i class="fa fa-map-marker"></i> <?php  echo tribe_get_venue();; ?>
        </div>
      </div>
      <div class="t-body">
        <p> 
            <?php 
            $eventstext = get_the_content();
            $trimmed_content = wp_trim_words( $eventstext, 18 );
            echo $trimmed_content;
            ?>
			  </p>  
        <div>
          <?php printf('<a href="%1s">%2s</a>',get_permalink(), $readmore);?>
        </div>
      </div>
	  </div>
  </li>
	 <?php endif ?>
</ul>
<?php endwhile; wp_reset_postdata();?>
</div>
<?php 
}
else {
  echo '<div class="error-box">' . 
  __('Error: events plugin is not activated. Install and activate it to see events posts. Or delete events shortcode to remove this notice.', 'activism') .
  '</div>';
 }
