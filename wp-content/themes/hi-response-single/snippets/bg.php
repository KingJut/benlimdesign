<?php 

if(get_field("background_image") == 'Full') {
  if (get_field("full_background_image")) { 
    $attachment_id = get_field("full_background_image");

    if ($detect->isMobile()) {
      if($detect->isTablet()){
        $size = "large";
      } else {
   	    $size = "large";
   	  }
    } else {
      $size = "full";
    }

    $image = wp_get_attachment_image_src($attachment_id, $size);
   	echo '<div id="bg"><div class="bleed"><img src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" /></div></div>';
  }
} 

?>