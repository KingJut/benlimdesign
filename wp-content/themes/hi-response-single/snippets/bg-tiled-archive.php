<?php 

$background_image = get_field('background_image', $taxonomy . '_' . $term_id);
$tile_image = get_field('tile_image', $taxonomy . '_' . $term_id);
$tile_image_retina = get_field('tile_image_retina', $taxonomy . '_' . $term_id);

if($background_image == 'Tiled') { ?>
<style>

  body {
    
    <?php 
    if ($tile_image) { 
      $image = $tile_image;
      $attachment_id = $image['id'];
      $size = "full";
      $image = wp_get_attachment_image_src($attachment_id, $size);
    ?>
    background: transparent url(<?php echo $image[0]; ?>) repeat;
    <?php } ?>
  }
  
  @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3 / 2), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {

    body {
      <?php 
      if ($tile_image_retina) { 
        $image = $tile_image_retina;
        $attachment_id = $image['id'];
        $size = "full";
        $image = wp_get_attachment_image_src($attachment_id, $size);
      ?>
      background: transparent url(<?php echo $image[0]; ?>) repeat;
      background-size: <?php echo $image[1] / 2; ?>px <?php echo $image[2] / 2; ?>px;
      <?php } ?>
    }
    
  }

  
</style>
<?php } ?>

