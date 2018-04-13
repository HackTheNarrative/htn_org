<div class="startAnimation animated" data-animate="fadeInUp">
<form method="get" class="searchform" id="searchform" 
action="<?php echo esc_url( home_url( '/' ) ); ?>" 
role="search">
<label for="s"><?php _e( 'Search', 'activism' ); ?></label>
<input type="text" name="s"
value="<?php echo esc_attr( get_search_query() ); ?>"
id="s" placeholder="<?php _e( 'To search, type and hit enter...', 'activism' ); ?>" />
</form>
</div>