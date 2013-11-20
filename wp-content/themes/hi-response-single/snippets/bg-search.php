<?php 
if(get_field("search_background_image", "option") == 'Full') {
  if (get_field("search_full_background_image", "option")) { 
    $attachment_id = get_field("search_full_background_image", "option");
    $size = "large";
    $image = wp_get_attachment_image_src($attachment_id, $size);
   	echo '<div id="bg"><div class="bleed"><img src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" /></div></div>';
  }
}
?>