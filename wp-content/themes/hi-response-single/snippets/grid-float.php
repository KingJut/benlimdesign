<?php 

// Gutter (If value is set to override the grid settings for this module)
$override_grid_gutter = get_sub_field("grid_gutter");
$state = false;
if ($override_grid_gutter) {
  $state = true;
}
// Sanitize
$override_grid_gutter = str_replace('px', '', $override_grid_gutter);
// Diffs
$grid_diff_horizontal = $grid_gutter - $override_grid_gutter;

if(get_sub_field("column_repeater")): 

// Module overrides
$module_padding_top = get_sub_field("module_padding_top");
$module_padding_bottom = get_sub_field("module_padding_bottom");
?>
  
<div class="grid-module module grid-holder <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
  <div class="grid-module-inner" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important; overflow: auto;"';} ?>>
    <div class="grid">
      
      <?php while(has_sub_field('column_repeater')): ?>
      
      <?php
      // Width
      $width = get_sub_field('width');
      $width = str_replace('%','', $width);
      // Push
      $push = get_sub_field('push');
      $push = str_replace('%','', $push);
      ?>
      
      <!-- Grid Item -->
      <div class="grid-item col col-<?php echo $width; ?> push-<?php echo $push; ?> <?php if (get_sub_field('clear')) {echo 'clear';} ?>">
        <div class="col-inner" style="<?php if ($state) {echo 'margin: '.$override_grid_gutter.'px !important';} ?>">
          
          <?php if (get_sub_field('html_override')) { ?>
            <?php echo '<div>' . get_sub_field('html_override') . '</div>'; ?>
              <?php if (get_sub_field('caption')) { ?>
              <div class="figcaption <?php echo $captions_text_size; ?> <?php if (get_sub_field('caption_align')) {echo get_sub_field('caption_align');} ?>">
                <?php echo get_sub_field('caption'); ?>
              </div>
              <?php } ?>
          <?php } else { ?>
          
          <div class="img-holder">
            <?php

            if ($detect->isMobile()) {
              
            } else {
              if (get_sub_field('image_focus_button')) { ?>
                <div class="focus-mode <?php echo $focus_icon_size; ?>" <?php if (get_sub_field('image_focus_button_color')) {echo 'style="color: '.get_sub_field('image_focus_button_color').'"';} ?>>
                  <span class="icons"><?php if ($media_focus_icon == 'Expand 1') {echo 'P';} else if ($media_focus_icon == 'Expand 2') {echo 'Q';} else {echo 'R';} ?></span>
                </div>
              <?php }
            }
  
            if (get_sub_field('image')) {
              $attachment_id = get_sub_field('image');
  
         	    if ($detect->isMobile()) {
                if($detect->isTablet()){

             	    if ($width == 100) {
                    $size = "large";
                  } else if ($width == 75) {
                    $size = "medium";
                  } else if ($width == 50) {
                    $size = "medium";
                  } else if ($width == 25) {
                    $size = "thumbnail";
                  }

         	      } else {

             	    if ($width == 100) {
                    $size = "medium";
                  } else if ($width == 75) {
                    $size = "medium";
                  } else if ($width == 50) {
                    $size = "thumbnail";
                  } else if ($width == 25) {
                    $size = "thumbnail";
                  }

         	      }
         	    } else if (get_sub_field('image_focus_button')) {
         	      $size = "full";
              } else {
                if ($width == 100) {
                  $size = "full";
                } else if ($width == 75) {
                  $size = "large";
                } else if ($width == 50) {
                  $size = "medium";
                } else if ($width == 25) {
                  $size = "thumbnail";
                }
              }
  
              $image = wp_get_attachment_image_src($attachment_id, $size);
           		echo '<img src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" />' ;
            } else {
              echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/square.png" data-width="400" data-height="400" />' ;
            }
  
            ?>
          </div>
          <?php if (get_sub_field('caption')) { ?>
          <div class="figcaption <?php echo $captions_text_size; ?> <?php if (get_sub_field('caption_align')) {echo get_sub_field('caption_align');} ?>">
            <?php echo get_sub_field('caption'); ?>
          </div>
          <?php } ?>
          
          
          <?php } ?>
          
        </div>
      </div>
      <?php endwhile; ?>
      
    </div>
  </div>
</div>

<?php endif; ?>