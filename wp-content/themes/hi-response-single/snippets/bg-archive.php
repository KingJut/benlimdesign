<?php 

$background_image = get_field('background_image', $taxonomy . '_' . $term_id);
//$tile_image = get_field('tile_image', $taxonomy . '_' . $term_id);
$full_image = get_field('full_image', $taxonomy . '_' . $term_id);

if($background_image == 'Full') {
  if ($full_image) { 
    $image = $full_image;
    $attachment_id = $image['id'];
    $size = "large";
    $image = wp_get_attachment_image_src($attachment_id, $size);
   	echo '<div id="bg"><div class="bleed"><img src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" /></div></div>';
  }
}

?>