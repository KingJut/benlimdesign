<?php if(get_sub_field("slide_repeater")) {
$module_padding_top = get_sub_field("module_padding_top"); 
$module_padding_bottom = get_sub_field("module_padding_bottom");
$color = get_sub_field("slideshow_override_color");
$width = get_sub_field("slideshow_width");
$width = str_replace('%','', $width);

if ($width == 100) {
  $push = 0;
} else if ($width == 75) {
  $push = 12;
} else if ($width == 50) {
  $push = 25;
} else if ($width == 25) {
  $push = 37;
}
 
?>

<div class="slideshow-module module <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?> col col-<?php echo $width; ?> push-<?php echo $push; ?> slidestyle">
  <div class="col-inner-hori slideshow-wrap">
    <div class="flexslider <?php echo $slideshow_arrow_size; ?>" data-caption-size="<?php echo get_sub_field("slideshow_slide_caption_text_size"); ?>" data-slide-caption-align="<?php echo get_sub_field("slideshow_slide_caption_align"); ?>" <?php if ($color) {echo 'data-color="'.$color.'"';} ?>>
      <ul class="slides">
        <?php while(has_sub_field('slide_repeater')):
          
          $attachment_id = get_sub_field('image');
   	 	   
   	 	    if (get_sub_field('image')) {
            
            if ($detect->isMobile()) {
              if($detect->isTablet()){
                $size = "medium";
       	      } else {
           	 	  $size = "thumbnail";
       	      }
            } else {
              $size = "full";
            }
  
            $image = wp_get_attachment_image_src($attachment_id, $size);
            echo '<li>';
         		echo '<img src="'  . $image[0] . '" class="notme" data-rsw="'  . $image[1] . '" data-rsh="'  . $image[2] . '" />' ;
  
         		
         		if (get_sub_field('caption')) { ?>
            <p class="flex-caption small <?php echo get_sub_field("caption_align"); ?>">
              <?php echo get_sub_field('caption'); ?>
            </p>
            <?php }
            echo '</li>';
            
         	} else {

           	echo '<li>';
         	  echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/slide.png" class="notme" data-rsw="800" data-rsh="450" />' ;
         		if (get_sub_field('caption')) { ?>
            <p class="flex-caption small <?php echo get_sub_field("caption_align"); ?>">
              <?php echo get_sub_field('caption'); ?>
            </p>
            <?php }
            echo '</li>';

         	}
          
          ?>
  
        <?php endwhile; ?>
      </ul>
    </div>
    
    <?php if (get_sub_field('slideshow_caption')) { ?>
    <div class="figcaption <?php echo $captions_text_size; ?> <?php echo get_sub_field('slideshow_caption_align'); ?>">
      <?php echo get_sub_field('slideshow_caption'); ?>
    </div>
    <?php } ?>
    
  </div>
</div>

<?php } ?>