<?php
/**meta tags **/
?>
<div class="meta">
<ul>
  <li class="metatime"> <i class="icon-time"></i> <?php echo get_the_date(get_option('date_format'))?></li>
  <li> <i class="icon-user"></i> <?php the_author_posts_link(); ?></li>
  <li><i class="icon-file-text"></i> <?php the_category(', ') ?>  </li>
  <li> <i class="icon-chat"></i> <?php comments_number('No Comments', '1 Comment', '% Comments' );?></li>
</ul>
</div>
