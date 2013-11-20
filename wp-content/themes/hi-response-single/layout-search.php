<?php 

include('snippets/bg-tiled-search.php');

if (get_field('search_layout_mode', 'option') == 'Grid Masonry') {
 	
  if (have_posts()): 
  echo '<div class="masonry-module module masonry-holder mpt-lb-0 mpb-lb-1">';
  echo '<div class="masonry-module-inner">';
  echo '<div class="masonry packery appender">';
  while ( have_posts() ) : the_post();
    include('snippets/archive_grid_masonry.php');
	endwhile;
	 echo '</div></div></div>';
	 include('snippets/next-prev-nav.php');
	else:
	
 	endif;
 	
} else if (get_field('search_layout_mode', 'option') == 'Row') { 
  
  echo '<div class="row-module module row-holder archive-module"><div class="appender row '.$row_item_overlay_text_size.'">';
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    include('snippets/archive_row.php');
	endwhile;
	 echo '</div></div>';
	 include('snippets/next-prev-nav.php');
	else:
 	endif;
 	
} else if (get_field('search_layout_mode', 'option') == 'Index') { 

  echo '<div class="index-module module archive-module index-list appender">';
  if ( have_posts() ) : while ( have_posts() ) : the_post();
    include('snippets/archive_index.php');
	endwhile;
	 echo '</div>';
	 include('snippets/next-prev-nav.php');
	else:
 	endif;
 	
} else if (get_field('search_layout_mode', 'option') == 'Full Render') { 

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
  echo '<div class="grid-module module mpt-lb-0 mpb-lb-1"><div class="appender">';
  while ( have_posts() ) : the_post();
    include('snippets/archive_grid_float.php');
	endwhile;
	 echo '</div></div>'; 
	 include('snippets/next-prev-nav.php');
	else:
 	endif;
 	
}

?>

