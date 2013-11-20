<?php 

// TAGS

if (is_tag()) {

  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;
  $term_id_2 = get_field('inherit_category_style', $taxonomy . '_' . $term_id);
  $taxonomy = $term_id_2->taxonomy;
  $term_id = $term_id_2->term_id;
  
  if ($term_id != false) {
  
    // Layout
    $layout_style = get_field('layout_mode', $taxonomy . '_' . $term_id);
    $display_footer = get_field('display_footer', $taxonomy . '_' . $term_id);
    $override_grid_gutter = get_field('grid_gutter', $taxonomy . '_' . $term_id);
    // Override state
    $state = false;
    if ($override_grid_gutter) {
      $state = true;
    }
    // Sanitize
    $override_grid_gutter = str_replace('px', '', $override_grid_gutter);
    // Diffs
    $grid_diff_horizontal = $grid_gutter - $override_grid_gutter;
    // If full image is set on the category or tag
    include('snippets/bg-archive.php');
    
    // Colors
    $colorswitch = get_field('color_switch', $taxonomy . '_' . $term_id);
    if ($colorswitch == true) {
      
      // Grab color values (if turned on)
      $grab_site_background_color = get_field('site_background_color', $taxonomy . '_' . $term_id);
      $grab_text_color = get_field('text_color', $taxonomy . '_' . $term_id);
      $grab_link_color = get_field('link_color', $taxonomy . '_' . $term_id);
      $grab_link_marked_color = get_field('link_marked_color', $taxonomy . '_' . $term_id);
      $grab_borders_color = get_field('borders_color', $taxonomy . '_' . $term_id);
      $grab_header_background_color = get_field('header_background_color', $taxonomy . '_' . $term_id);
      $grab_menu_background_color = get_field('menu_background_color', $taxonomy . '_' . $term_id);
      $grab_loader_color = get_field('loader_color', $taxonomy . '_' . $term_id);
      $grab_media_loader_bg_color = get_field('media_loader_bg_color', $taxonomy . '_' . $term_id);
      $grab_thumbnail_text_color = get_field('thumbnail_text_color', $taxonomy . '_' . $term_id);
      $grab_thumbnail_hover_text_color = get_field('thumbnail_hover_text_color', $taxonomy . '_' . $term_id);
      $grab_row_item_hover_background_color = get_field('row_item_hover_background_color', $taxonomy . '_' . $term_id);
      $grab_row_item_hover_text_color = get_field('row_item_hover_text_color', $taxonomy . '_' . $term_id);
      $grab_index_item_dimmed_color = get_field('index_item_dimmed_color', $taxonomy . '_' . $term_id);
      $grab_index_item_active_color = get_field('index_item_active_color', $taxonomy . '_' . $term_id);
      $grab_forms_border_color = get_field('forms_border_color', $taxonomy . '_' . $term_id);
      $grab_forms_focus_border_color = get_field('forms_focus_border_color', $taxonomy . '_' . $term_id);
      $grab_forms_background_color = get_field('forms_background_color', $taxonomy . '_' . $term_id);
      $grab_forms_text_color = get_field('forms_text_color', $taxonomy . '_' . $term_id);
      $grab_button_background_color = get_field('button_background_color', $taxonomy . '_' . $term_id);
      $grab_button_text_color = get_field('button_text_color', $taxonomy . '_' . $term_id);
      $grab_button_hover_background_color = get_field('button_hover_background_color', $taxonomy . '_' . $term_id);
      $grab_button_hover_text_color = get_field('button_hover_text_color', $taxonomy . '_' . $term_id);
      // Apply them
      include('snippets/style-apply.php');
      
    }
    
    include('snippets/bg-tiled-archive.php');
    
    if ($layout_style == 'Grid Masonry') {
    
      if ( have_posts() ) : 
      echo '<div class="masonry-module module masonry-holder mpt-lb-0 mpb-lb-1">';
      echo '<div class="masonry-module-inner"';
      if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';}
      echo '>';
      echo '<div class="masonry packery appender">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_grid_masonry.php');
    	endwhile;
    	 echo '</div></div></div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    } else if ($layout_style == 'Row') { 
      
      if ( have_posts() ) :
      echo '<div class="row-module module row-holder mpt-lb-0 mpb-lb-0"><div class="appender row '.$row_item_overlay_text_size.'">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_row.php');
    	endwhile;
    	 echo '</div></div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    } else if ($layout_style == 'Index') { 
      
      if ( have_posts() ) :
      echo '<div class="index-module module archive-module index-list appender">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_index.php');
    	endwhile;
    	 echo '</div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    } else if ($layout_style == 'Full Render') { 
    
      if ( have_posts() ) :
      echo '<div class="fullpost-module appender">';
      while ( have_posts() ) : the_post();
        include('archive-full-render.php');
    	endwhile;
    	echo '</div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
    } else {
      if ( have_posts() ) :
      echo '<div class="grid-module module mpt-lb-0 mpb-lb-1">'; ?>
      <div class="appender" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important; overflow: auto;"';} ?>>
      <?php 
      while ( have_posts() ) : the_post();
        include('snippets/archive_grid_float.php');
    	endwhile;
    	 echo '</div></div>'; 
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    }


  } else {
  
    // No Inherit 
    
    // Layout
    $layout_style = 'Index';
    $display_footer = true;
    $override_grid_gutter = false;
    // Override state
    $state = false;
    if ($override_grid_gutter) {
      $state = true;
    }
    // Sanitize
    $override_grid_gutter = str_replace('px', '', $override_grid_gutter);
    // Diffs
    $grid_diff_horizontal = $grid_gutter - $override_grid_gutter;
    
    if ($layout_style == 'Grid Masonry') {
    
      if ( have_posts() ) : 
      echo '<div class="masonry-module module masonry-holder mpt-lb-0 mpb-lb-1">'; ?>
      <div class="masonry-module-inner" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';} ?>>
      
      <?php echo '<div class="masonry packery appender">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_grid_masonry.php');
    	endwhile;
    	 echo '</div></div></div>';
    	 include('snippets/next-prev-nav.php');
    	else:
    	
     	endif;
     	
    } else if ($layout_style == 'Row') { 
      
      if ( have_posts() ) :
      echo '<div class="row-module module row-holder mpt-lb-0 mpb-lb-0"><div class="appender row '.$row_item_overlay_text_size.'">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_row.php');
    	endwhile;
    	 echo '</div></div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    } else if ($layout_style == 'Index') { 
      
      if ( have_posts() ) :
      echo '<div class="index-module module archive-module index-list appender">';
      while ( have_posts() ) : the_post();
        include('snippets/archive_index.php');
    	endwhile;
    	 echo '</div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    } else if ($layout_style == 'Full Render') { 
    
      if ( have_posts() ) :
      echo '<div class="fullpost-module appender">';
      while ( have_posts() ) : the_post();
        include('archive-full-render.php');
    	endwhile;
    	echo '</div>';
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
    } else {
      if ( have_posts() ) :
      echo '<div class="grid-module module mpt-lb-0 mpb-lb-1">'; ?>
      <div class="appender" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important; overflow: auto;"';} ?>>
      <?php 
      while ( have_posts() ) : the_post();
        include('snippets/archive_grid_float.php');
    	endwhile;
    	 echo '</div></div>'; 
    	 include('snippets/next-prev-nav.php');
    	else:
     	endif;
     	
    }
  
  }



// CATS

} else if (is_category()) {

  $queried_object = get_queried_object(); 
  $taxonomy = $queried_object->taxonomy;
  $term_id = $queried_object->term_id;  
  
  // Layout
  $layout_style = get_field('layout_mode', $taxonomy . '_' . $term_id);
  $display_footer = get_field('display_footer', $taxonomy . '_' . $term_id);
  $override_grid_gutter = get_field('grid_gutter', $taxonomy . '_' . $term_id);
  // Override state
  $state = false;
  if ($override_grid_gutter) {
    $state = true;
  }
  // Sanitize
  $override_grid_gutter = str_replace('px', '', $override_grid_gutter);
  // Diffs
  $grid_diff_horizontal = $grid_gutter - $override_grid_gutter;
  // If full image is set on the category or tag
  include('snippets/bg-archive.php');
  
  // Colors
  $colorswitch = get_field('color_switch', $taxonomy . '_' . $term_id);
  if ($colorswitch == true) {
    
    // Grab color values (if turned on)
    $grab_site_background_color = get_field('site_background_color', $taxonomy . '_' . $term_id);
    $grab_text_color = get_field('text_color', $taxonomy . '_' . $term_id);
    $grab_link_color = get_field('link_color', $taxonomy . '_' . $term_id);
    $grab_link_marked_color = get_field('link_marked_color', $taxonomy . '_' . $term_id);
    $grab_borders_color = get_field('borders_color', $taxonomy . '_' . $term_id);
    $grab_header_background_color = get_field('header_background_color', $taxonomy . '_' . $term_id);
    $grab_menu_background_color = get_field('menu_background_color', $taxonomy . '_' . $term_id);
    $grab_loader_color = get_field('loader_color', $taxonomy . '_' . $term_id);
    $grab_media_loader_bg_color = get_field('media_loader_bg_color', $taxonomy . '_' . $term_id);
    $grab_thumbnail_text_color = get_field('thumbnail_text_color', $taxonomy . '_' . $term_id);
    $grab_thumbnail_hover_text_color = get_field('thumbnail_hover_text_color', $taxonomy . '_' . $term_id);
    $grab_row_item_hover_background_color = get_field('row_item_hover_background_color', $taxonomy . '_' . $term_id);
    $grab_row_item_hover_text_color = get_field('row_item_hover_text_color', $taxonomy . '_' . $term_id);
    $grab_index_item_dimmed_color = get_field('index_item_dimmed_color', $taxonomy . '_' . $term_id);
    $grab_index_item_active_color = get_field('index_item_active_color', $taxonomy . '_' . $term_id);
    $grab_forms_border_color = get_field('forms_border_color', $taxonomy . '_' . $term_id);
    $grab_forms_focus_border_color = get_field('forms_focus_border_color', $taxonomy . '_' . $term_id);
    $grab_forms_background_color = get_field('forms_background_color', $taxonomy . '_' . $term_id);
    $grab_forms_text_color = get_field('forms_text_color', $taxonomy . '_' . $term_id);
    $grab_button_background_color = get_field('button_background_color', $taxonomy . '_' . $term_id);
    $grab_button_text_color = get_field('button_text_color', $taxonomy . '_' . $term_id);
    $grab_button_hover_background_color = get_field('button_hover_background_color', $taxonomy . '_' . $term_id);
    $grab_button_hover_text_color = get_field('button_hover_text_color', $taxonomy . '_' . $term_id);
    // Apply them
    include('snippets/style-apply.php');
    
  }
  
  include('snippets/bg-tiled-archive.php');
  
  if ($layout_style == 'Grid Masonry') {
  
    if ( have_posts() ) : 
    echo '<div class="masonry-module module masonry-holder mpt-lb-0 mpb-lb-1">';
    echo '<div class="masonry-module-inner"';
    if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';}
    echo '>';
    echo '<div class="masonry packery appender">';
    while ( have_posts() ) : the_post();
      include('snippets/archive_grid_masonry.php');
  	endwhile;
  	 echo '</div></div></div>';
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;
   	
  } else if ($layout_style == 'Row') { 
    
    if ( have_posts() ) :
    echo '<div class="row-module module row-holder mpt-lb-0 mpb-lb-0"><div class="appender row '.$row_item_overlay_text_size.'">';
    while ( have_posts() ) : the_post();
      include('snippets/archive_row.php');
  	endwhile;
  	 echo '</div></div>';
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;
   	
  } else if ($layout_style == 'Index') { 
    
    if ( have_posts() ) :
    echo '<div class="index-module module archive-module index-list appender">';
    while ( have_posts() ) : the_post();
      include('snippets/archive_index.php');
  	endwhile;
  	 echo '</div>';
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;
   	
  } else if ($layout_style == 'Full Render') { 
  
    if ( have_posts() ) :
    echo '<div class="fullpost-module appender">';
    while ( have_posts() ) : the_post();
      include('archive-full-render.php');
  	endwhile;
  	echo '</div>';
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;
  } else {
    if ( have_posts() ) :
    echo '<div class="grid-module module mpt-lb-0 mpb-lb-1">'; ?>
    <div class="appender" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important; overflow: auto;"';} ?>>
    <?php 
    while ( have_posts() ) : the_post();
      include('snippets/archive_grid_float.php');
  	endwhile;
  	 echo '</div></div>'; 
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;
   	
  }

} else {

    if (is_day() ) { $this_header = "Archive " . get_the_date(); }
    else if (is_month() ){ $this_header = "Archive: " . get_the_date('F, Y'); }
    else if (is_year() ){ $this_header = "Archive: " . get_the_date('Y'); }
    else { $this_header = "Archives:";}

    echo '<div class="text-module module"><div class="col col-100 push-0 left "><div class="col-inner-hori"><h2 class="lb-2 default align-left">'.$this_header.'</h2></div></div></div>';

    echo '<div class="index-module module index-list appender">';
    if ( have_posts() ) : while ( have_posts() ) : the_post();
      include('snippets/archive_index.php');
  	endwhile;
  	 echo '</div>';
  	 include('snippets/next-prev-nav.php');
  	else:
   	endif;

}

?>

