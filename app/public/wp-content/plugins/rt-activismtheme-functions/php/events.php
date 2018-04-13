<?php
/**
 * events query custom post type works with https://wordpress.org/plugins/the-events-calendar/
 *
 */
 ?>
<div class="wrapper100percent">
<div class="events">
<div id="masonrycontainer1">
<?php
$day = NULL;
$args = array( 'post_type' => 'tribe_events', 'posts_per_page' => $limit, 'order' => $order);
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
 ?>
 <!-- post -->
<div class="masonryselector1 col-lg-6 startAnimation animated" data-animate="fadeInUp">

<div class="oneevent startAnimation animated" data-animate="fadeInUp">
 <div class="eventsdate">           
			<?php 
            printf(
			'<a href="%1s">%2s</a>',
            get_permalink(),
			'<div class="inkevent">'.
			'<i class="icon-time"></i>'.
			'<p>'.
			tribe_events_event_schedule_details().
			'</p>'.
			'</div>'
            );
            ?>	
</div>		
			<div class="eventstext">
			
			 <h4><?php the_title(); ?></h4>
			 <ul>
			 <li>
			  <?php echo __('Place: ', 'activism') . '<span>' . tribe_get_venue() . '</span>'; ?>
			   </li>
			   <li>
			  <?php echo __('Time: ', 'activism') . '<span>' . tribe_events_event_schedule_details() . '</span>'; ?>
			   </li>
			 
			 </ul>
			<p>
			<?php 
            $eventstext = get_the_content();
            $trimmed_content = wp_trim_words( $eventstext, 25 );
            echo $trimmed_content;
            ?>
			</p>
			<div class="wrapper100percent">
			 <?php 
            printf('<a class="eventslink" href="%1s">%2s</a>',
            get_permalink(),
            __('Read More... ', 'activism')
            );
            ?>
			</div>
			</div>
			</div>

</div>

<?php endwhile; wp_reset_postdata(); ?>
<!-- ./post end-->
</div>
</div>
</div>




