<?php  
  
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
 
  	if(get_row_layout() == "flex_module"): 
  	  // layout: Masonry
      include('snippets/blog.php');
  	elseif(get_row_layout() == "separator"): 
  	  // layout: Separator
      include('snippets/separator.php');
  	endif;
 
  endwhile;
  
?>