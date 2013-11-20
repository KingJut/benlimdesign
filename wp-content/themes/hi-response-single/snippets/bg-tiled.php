<?php if(get_field("background_image") == 'Tiled') { ?>
<style>

body {
  background: transparent url(
  <?php if (get_field("tiled_background_image")) { 
    $attachment_id = get_field("tiled_background_image");
    $size = "full";
    $image = wp_get_attachment_image_src($attachment_id, $size);
 		echo $image[0];
  } ?>) repeat;
}

@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3 / 2), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {

  body {
    background: transparent url(
    <?php if (get_field("tiled_background_image_retina")) { 
      $attachment_id = get_field("tiled_background_image_retina");
      $size = "full";
      $image = wp_get_attachment_image_src($attachment_id, $size);
   		echo $image[0];
    } ?>) repeat;
      background-size: <?php echo $image[1] / 2; ?>px <?php echo $image[2] / 2; ?>px;
  }
  
}
  
</style>
<?php } ?>