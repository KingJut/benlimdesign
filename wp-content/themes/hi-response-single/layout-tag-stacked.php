<?php
// Layout Style
$layout_style = get_sub_field('stack_layout');

$override_grid_gutter = get_sub_field("stack_grid_gutter");
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

  // Query Posts from Tag
  $args = array(
	  'tag_id' => $tag,
	  'posts_per_page' => $number_of_posts
  );
  query_posts($args);

  if ( have_posts() ) : 
  echo '<div class="masonry-module module masonry-holder mpt-lb-0 mpb-lb-1">'; ?>
  <div class="masonry-module-inner" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';} ?>>
  
  <?php echo '<div class="masonry packery appender">';
  while ( have_posts() ) : the_post();
    include('snippets/archive_grid_masonry.php');
	endwhile;
	 echo '</div></div></div>';
	else:
 	endif;
 	wp_reset_query();
 
} else if ($layout_style == 'Row') { 
  
  echo '<div class="row-module module row-holder '. 'mpt-' .$stack_margin_top.' '. 'mpb-' .$stack_margin_bottom.'"><div class="row '.$row_item_overlay_text_size.'">';
  // Query Posts from Tag
  $args = array(
	  'tag_id' => $tag,
	  'posts_per_page' => $number_of_posts
  );
  query_posts($args);
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    include('snippets/archive_row.php');
	endwhile; else:
 	  echo '<p>Sorry, no posts matched your criteria.</p>';
 	endif;
 	echo '</div></div>';
 	wp_reset_query();
 	
} else if ($layout_style == 'Index') { 
  echo '<div class="index-module module index-list '. 'mpt-' .$stack_margin_top.' '. 'mpb-' .$stack_margin_bottom.'">';
  // Query Posts from Tag
  $args = array(
	  'tag_id' => $tag,
	  'posts_per_page' => $number_of_posts
  );
  query_posts($args);
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    include('snippets/archive_index.php');
	endwhile; else:
 	  echo '<p>Sorry, no posts matched your criteria.</p>';
 	endif;
 	echo '</div>';
  wp_reset_query();
  
} else if ($layout_style == 'Full Render') { 

  echo '<div class="fullpost-module module">';
  // Query Posts from Cat
  $args = array(
	  'cat' => $cat,
	  'posts_per_page' => $number_of_posts
  );
  query_posts($args);
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    
    include('snippets/separator.php');
      
    // Default Modules
    while(has_sub_field("module")):
   
    	if(get_row_layout() == "grid"): 
        if (get_sub_field("grid_layout_type") == 'Float') {
          // layout: Grid Float
          include('snippets/grid-float.php');
        } else {
    	    // layout: Grid Masonry
          include('snippets/grid-masonry.php');
        }
      elseif(get_row_layout() == "row"): 
      	// layout: Row
        include('snippets/row.php');
    	elseif(get_row_layout() == "slideshow"): 
    	  // layout: Slideshow
    	  include('snippets/slideshow.php');
    	elseif(get_row_layout() == "text"): 
        if (get_sub_field("grid_layout_type") == 'Float') {
          // layout: Text Float
          include('snippets/text-float.php');
        } else {
    	    // layout: Text Masonry
          include('snippets/text-masonry.php');
        }
    	elseif(get_row_layout() == "section_separator"): 
    	  // layout: Separator
        include('snippets/separator.php');
    	endif;
   
    endwhile;
    
    // Blog Modules
    while(has_sub_field("blog_specific_module")):
   
      $hit = true;
    	if(get_row_layout() == "flex_module"): 
    	  // layout: Masonry
        include('snippets/blog.php');
    	elseif(get_row_layout() == "separator"): 
    	  // layout: Separator
        include('snippets/separator.php');
    	endif;
   
    endwhile; 
    
    
	endwhile; else:
 	  echo '<div class="col col-100"><div class="col-inner-hori"><p>Sorry, no posts matched your criteria.</p></div></div>';
 	endif;
 	echo '</div>';
 	wp_reset_query();
  
} else {
  
    echo '<div class="grid-module module appender '. 'mpt-' .$stack_margin_top.' '. 'mpb-' .$stack_margin_bottom.'">'; ?>
    <div <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';} ?>>
  <?php
  // Query Posts from Tag
  $args = array(
	  'tag_id' => $tag,
	  'posts_per_page' => $number_of_posts
  );
  query_posts($args);
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    include('snippets/archive_grid_float.php');
	endwhile; else:
 	  echo '<p>Sorry, no posts matched your criteria.</p>';
 	endif;
 	echo '</div></div>';
 	wp_reset_query();
}

?>

