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

$module_padding_top = get_sub_field("module_padding_top"); 
$module_padding_bottom = get_sub_field("module_padding_bottom"); 

?>
  
<div class="masonry-module module masonry-holder <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
  <div class="masonry-module-inner" <?php if ($state) {echo 'style="margin-left: '.$grid_diff_horizontal.'px !important; margin-right: '.$grid_diff_horizontal.'px !important;"';} ?>>
  <div class="masonry packery isotope">
    
    <?php while(has_sub_field('column_repeater')): ?>
    
    <?php
    
    $width = get_sub_field('width');
    $width = str_replace('%','', $width);
    
    ?>
    
    <!-- Masonry Item -->
    <div class="masonry-item item col col-<?php echo $width; ?>">
      <div class="item-content col-inner" style="<?php if ($state) {echo 'margin-left: '.$override_grid_gutter.'px !important; margin-right: '.$override_grid_gutter.'px !important;';} ?> <?php if ($state) {echo 'margin-top: '.$override_grid_gutter.'px !important;';} ?> <?php if ($state) {echo 'margin-bottom: '.$override_grid_gutter.'px !important;';} ?>">
      
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
                $size = "large";
       	      } else {
           	 	  $size = "medium";
       	      }
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
         		echo '</div>';
         		if (get_sub_field('caption')) { ?>
            <div class="figcaption <?php echo $captions_text_size; ?> <?php if (get_sub_field('caption_align')) {echo get_sub_field('caption_align');} ?>">
              <?php echo get_sub_field('caption'); ?>
            </div>
            <?php }
       		
       		} else {
       		
         		  $rand = rand(0,3);

         		  if ($rand == 0) {
         		    echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/masonry-square-1.png" data-width="400" data-height="267" />' ;
         		  } else if ($rand == 1) {
           		  echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/masonry-square-2.png" data-width="800" data-height="800" />' ;
         		  } else if ($rand == 2) {
           		  echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/masonry-square-3.png" data-width="800" data-height="800" />' ;
         		  } else if ($rand == 3) {
           		  echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/masonry-square-4.png" data-width="400" data-height="600" />' ;
         		  }
         		  
         		  echo '</div>';
         		  
       		  
       		  if (get_sub_field('caption')) { ?>
            <div class="figcaption <?php echo $captions_text_size; ?> <?php if (get_sub_field('caption_align')) {echo get_sub_field('caption_align');} ?>">
              <?php echo get_sub_field('caption'); ?>
            </div>
            <?php }
       		}

          ?>
          
          
        <?php } ?>
        
      </div>
      
      
    </div>
    <?php endwhile; ?>
    
  </div>
  </div>
</div>

<?php endif; ?>