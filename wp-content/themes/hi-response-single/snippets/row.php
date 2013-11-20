<?php 

// If value is set to override the grid settings for this module
$override_grid_gutter = get_sub_field("grid_gutter");

$state = false;
if ($override_grid_gutter) {
  $state = true;
}

// Sanitize
$override_grid_gutter = str_replace('px', '', $override_grid_gutter) * 2;
// Diff
$grid_diff = $grid_gutter - $override_grid_gutter;

if(get_sub_field("column_repeater")): ?>

<?php 
$module_padding_top = get_sub_field("module_padding_top"); 
$module_padding_bottom = get_sub_field("module_padding_bottom"); 
?>
  
<div class="row-module module row-holder <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
  <div class="row <?php echo $row_item_overlay_text_size; ?>" <?php if ($state) {echo 'style="margin-top: '.$override_grid_gutter.'px !important;"';} ?>>
    
    <?php while(has_sub_field('column_repeater')): ?>
    
    <!-- Row Item -->
    <a href="#" class="row-item row-item-default left preventDefault">
      <div class="col-inner" <?php if (get_sub_field('clear')) {echo 'clear';} ?>" <?php if ($state) {echo 'style="margin-right: '.$override_grid_gutter.'px !important; margin-bottom: '.$override_grid_gutter.'px !important;"';} ?>>
        
        <?php if (get_sub_field('html_override')) { ?>
          <?php echo '<div>' . get_sub_field('html_override') . '</div>'; ?>
        <?php } else { ?>
        
          <div class="img-holder">
            <?php if (get_sub_field('caption')) { ?>
            <div class="figcaption-bg" style="<?php if (get_sub_field('caption_bg_color')) {echo 'background: '.get_sub_field('caption_bg_color').';';} ?>;">&nbsp;</div>
            <div class="figcaption" style="<?php if (get_sub_field('caption_text_color')) {echo 'color: '.get_sub_field('caption_text_color').';';} ?>">
              <div><?php echo get_sub_field('caption'); ?></div>
            </div>
            <?php } ?>
          
            <?php

            $attachment_id = get_sub_field('image');

            if (get_sub_field('image')) { 

         	    if ($detect->isMobile()) {
                if($detect->isTablet()){
                  $size = "thumbnail";
         	      } else {
             	 	  $size = "thumbnail";
         	      }
              } else {
                $size = "thumbnail";
              }

              $image = wp_get_attachment_image_src($attachment_id, $size);
           		echo '<img class="reverse" src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" />' ;
         		
           	} else {
           	  
         		  $rand = rand(0,11);
         		  $img = '';

         		  if ($rand == 0) {
         		    $img = 'row-portrait-white.png';
         		  } else if ($rand == 1) {
           		  $img = 'row-square-white.png';
         		  } else if ($rand == 2) {
           		  $img = 'row-landscape-white.png';
         		  } else if ($rand == 3) {
           		  $img = 'row-portrait-grey.png';
         		  } else if ($rand == 4) {
           		  $img = 'row-square-black.png';
         		  } else if ($rand == 5) {
           		  $img = 'row-landscape-black.png';
         		  } else if ($rand == 6) {
           		  $img = 'row-portrait-grey.png';
         		  } else if ($rand == 7) {
           		  $img = 'row-square-grey.png';
         		  } else if ($rand == 8) {
           		  $img = 'row-landscape-grey.png';
         		  } else if ($rand == 9) {
           		  $img = 'row-portrait-blue.png';
         		  } else if ($rand == 10) {
           		  $img = 'row-square-blue.png';
         		  } else if ($rand == 11) {
           		  $img = 'row-landscape-blue.png';
         		  }
         		  
         		  echo '<img class="reverse" src="'  . get_bloginfo('stylesheet_directory') . '/images/'.$img.'" data-width="400" data-height="400" />' ;
           	}

            ?>          
          </div>
        
        <?php } ?>
        
      </div>
    </a>
    <?php endwhile; ?>
    
  </div>
</div>

<?php endif; ?>