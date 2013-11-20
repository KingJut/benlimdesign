<?php if ($taxonomy_pagination_type == 'Infinity (Ajax)' || $taxonomy_pagination_type == 'Load more (Ajax)') { ?>

  <?php 
  // Check if the current page is 'Full Render' or not
  $fullrender = false;
  if (get_field('layout_mode', $taxonomy . '_' . $term_id) == 'Full Render') {
    $fullrender = true;
  }
  if (is_home() && get_field('frontpage_layout_mode', 'option') == 'Full Render') {
    $fullrender = true;
  }
  if (is_search() && get_field('search_layout_mode', 'option') == 'Full Render') {
    $fullrender = true;
  }
  ?>

  <?php if(get_next_posts_link()) { 
    
  $load_more_width = str_replace('%', '', $load_more_width);
  $load_more_push = str_replace('%', '', $load_more_push);
    
  ?>
  
  <?php if ($fullrender == true) { ?>
  
  <div class="loadmore-holder module mbt-lb-0 mpb-lb-1">
    <?php include('separator.php'); ?>
    <div class="loadmore-fullrender loadmore-trigger col col-<?php echo $load_more_width; ?> push-<?php echo $load_more_push; ?>">
      <div class="col-inner-hori <?php echo $load_more_text_align; ?>">
        <?php $loadmore = 'Load more'; if ($copy_5) {$loadmore = $copy_5;} next_posts_link(''.$loadmore.'', 0); ?>
      </div>
    </div>
  </div>
  
  <?php } else { ?>
  
  <div class="loadmore-holder module mbt-lb-0 mpb-lb-1">
    <?php include('separator.php'); ?>
    <div class="loadmore loadmore-trigger col col-<?php echo $load_more_width; ?> push-<?php echo $load_more_push; ?>">
      <div class="col-inner-hori <?php echo $load_more_text_align; ?>">
        <?php $loadmore = 'Load more'; if ($copy_5) {$loadmore = $copy_5;} next_posts_link(''.$loadmore.'', 0); ?>
      </div>
    </div>
  </div>
  
  <?php } ?>
  
  
  <?php } ?>

<?php } else { ?>
  <div id="nextprev-page" class="module">
    <?php include('separator.php'); ?>

    <div class="col col-50">
      <div class="col-inner-hori align-left">
        <?php if(get_previous_posts_link()) { ?>
          <?php previous_posts_link($copy_4, 0); ?>
        <?php } else {echo'&nbsp;';} ?>
      </div>
    </div>
    
    <div class="col col-25">
      <div class="col-inner-hori">
        <?php
        global $wp_query;
        $big = 999999999; // need an unlikely integer
        echo paginate_links(array(
          'base' => str_replace($big, '%#%', get_pagenum_link($big)),
          'format' => '?paged=%#%',
          'total' => $wp_query->max_num_pages,
          'current' => max(1, get_query_var('paged')),
          'show_all' => false,
          'end_size' => 2,
          'mid_size' => 3,
          'prev_next' => false,
          'prev_text' => $copy_3,
          'next_text' => $copy_4,
          'type' => 'plain'
        ));
        ?>
      </div>
    </div>
    
    <div class="col col-25">
      <div class="col-inner-hori align-right">
        <?php if(get_next_posts_link()) { ?>
          <?php next_posts_link($copy_3, 0); ?>
        <?php } else {echo'&nbsp;';} ?>
      </div>
    </div>

  </div>
<?php } ?>