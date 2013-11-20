<?php if(get_field("search_background_image", "option") == 'Tiled') { ?>
<style>

body {
  background: transparent url(
  <?php if (get_field("search_tiled_background_image", "option")) { 
    $attachment_id = get_field("search_tiled_background_image", "option");
    $size = "full";
    $image = wp_get_attachment_image_src($attachment_id, $size);
 		echo $image[0];
  } ?>) repeat;
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3 / 2), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {

  body {
    background: transparent url(
    <?php if (get_field("search_tiled_background_image_retina", "option")) { 
      $attachment_id = get_field("search_tiled_background_image_retina", "option");
      $size = "full";
      $image = wp_get_attachment_image_src($attachment_id, $size);
   		echo $image[0];
    } ?>) repeat;
      background-size: <?php echo $image[1] / 2; ?>px <?php echo $image[2] / 2; ?>px;
  }
  
}
  
</style>
<?php } ?>