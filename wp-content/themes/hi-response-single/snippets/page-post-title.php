<?php if (get_field("display_post_page_title")) { ?>
  <?php 
  
  $col = get_field("post_page_title_column_width"); 
  $push = get_field("post_page_title_column_push"); 
    
  ?>
      <div class="module mpt-lb-0 mpb-lb-1">
        <div class="col col-<?php if ($col) {echo $col;} else {echo '50';} ?> push-<?php if ($push) {echo $push;} else {echo '0';} ?> col-padd-hori">
          <?php the_title(); ?>
        </div>
      </div>
<?php } ?>