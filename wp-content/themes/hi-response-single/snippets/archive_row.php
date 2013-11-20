<?php if (in_category('Inactive')) { 
  // If post is 'dimmed'
?>
  
<?php } else { ?>

<?php if(get_field("thumbnail_image")) { ?>
    
    <!-- Row Item -->
    <div class="item row-item left">
      <div class="col-inner" style="<?php if ($state) {echo 'margin-right: '.$override_grid_gutter*2 .'px; margin-bottom: '.$override_grid_gutter*2 .'px;';} ?>">
      
      <?php
      
        if (get_field("advanced_thumbnail")) {
      
          // Thumb vars
          $color = get_field("hover_background_color");
          $textcolor = get_field("text_color");
          $hovertextcolor = get_field("hover_text_color");
          $opacity = get_field("hover_background_opacity");
          
          if ($opacity == '0%') {
            //$opacitycalc = '1';
            $opacitycalc = '0.0';
          } else if ($opacity == '10%') {
            //$opacitycalc = '0.9';
            $opacitycalc = '0.1';
          } else if ($opacity == '20%') {
            //$opacitycalc = '0.8';
            $opacitycalc = '0.2';
          } else if ($opacity == '30%') {
            //$opacitycalc = '0.7';
            $opacitycalc = '0.3';
          } else if ($opacity == '40%') {
            //$opacitycalc = '0.6';
            $opacitycalc = '0.4';
          } else if ($opacity == '50%') {
            //$opacitycalc = '0.5';
            $opacitycalc = '0.5';
          } else if ($opacity == '60%') {
            //$opacitycalc = '0.4';
            $opacitycalc = '0.6';
          } else if ($opacity == '70%') {
            //$opacitycalc = '0.3';
            $opacitycalc = '0.7';
          } else if ($opacity == '80%') {
            //$opacitycalc = '0.2';
            $opacitycalc = '0.8';
          } else if ($opacity == '90%') {
            //$opacitycalc = '0.1';
            $opacitycalc = '0.9';
          } else if ($opacity == '100%') {
            //$opacitycalc = '0.0';
            $opacitycalc = '1';
          } else {
            $opacitycalc = '1';
          }
        
        } else {
          // Thumb vars
          $color = 0;
          $textcolor = 0;
          $hovertextcolor = 0;
          $opacitycalc = '1.0';
        }
        
      ?>
        
        <a href="<?php the_permalink(); ?>" class="history thumb row-thumb row-thumb-archive <?php if ($pagetype == 'single' || $pagetype == 'page') { if ($wp_query->post->ID == $postid || $wp_query->post->ID == $this_page_id) {echo 'active';} } ?> <?php if (get_field("advanced_thumbnail")) {echo 'advanced';} ?>" <?php if ($opacitycalc) {echo 'data-opacity="'.$opacitycalc.'"';} ?> <?php if ($color) {echo 'data-bg-color="'.$color.'"';} ?> <?php if ($textcolor) {echo 'data-text-color="'.$textcolor.'"';} ?> <?php if ($hovertextcolor) {echo 'data-hover-text-color="'.$hovertextcolor.'"';} ?>>
          
          <div class="img-holder row-img">
          
            <?php

            $attachment_id = get_field('thumbnail_image');
            $attachment_id_2 = get_field("thumbnail_image_hover");

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
            $image_hover = wp_get_attachment_image_src($attachment_id_2, $size); 
            
            ?>
          
            <?php if ($image_hover[0]) { ?>
            <div class="hover-image">
              <img class="reverse" src="<?php echo $image_hover[0]; ?>" data-width="<?php echo $image_hover[1]; ?>" data-height="<?php echo $image_hover[2]; ?>" />
            </div>
            <?php } ?>
            <div class="figcaption-bg" style="<?php if ($color) { echo 'background:' . $color .';'; } ?> -ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=<?php echo $opacitycalc *100; ?>)';filter: alpha(opacity=<?php echo $opacitycalc *100; ?>);-moz-opacity: <?php echo $opacitycalc; ?>;-khtml-opacity: <?php echo $opacitycalc; ?>;opacity: <?php echo $opacitycalc; ?>;">&nbsp;</div>
          <?php if (get_field('thumbnail_title')) { ?>
            <div class="figcaption <?php echo $row_item_overlay_text_size; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 0px solid transparent; text-decoration: underline;';} else { echo 'border-bottom: 0px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
            </div>
          <?php } else { ?>
            <div class="figcaption <?php echo $row_item_overlay_text_size; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 0px solid transparent; text-decoration: underline;';} else { echo 'border-bottom: 0px solid transparent'; }} ?>"><?php echo the_title(); ?></span>
            </div>
          <?php } ?>
            
            <img class="reverse" src="<?php echo $image[0]; ?>" data-width="<?php echo $image[1]; ?>" data-height="<?php echo $image[2]; ?>" <?php if ($image_hover[0]) { echo 'data-hoversrc="' . $image_hover[0] . '"'; } ?> />
            
         
          </div>
        
        </a>
        
      </div>
    </div>

<?php } else { ?>
  
  <!-- Row Item -->
  <div class="item row-item left">
    <div class="col-inner" style="<?php if ($state) {echo 'margin-right: '.$override_grid_gutter*2 .'px; margin-bottom: '.$override_grid_gutter*2 .'px;';} ?>">
    
      <?php
      
        if (get_field("advanced_thumbnail")) {
      
          // Thumb vars
          $color = get_field("hover_background_color");
          $textcolor = get_field("text_color");
          $hovertextcolor = get_field("hover_text_color");
          $opacity = get_field("hover_background_opacity");
          
          if ($opacity == '0%') {
            //$opacitycalc = '1';
            $opacitycalc = '0.0';
          } else if ($opacity == '10%') {
            //$opacitycalc = '0.9';
            $opacitycalc = '0.1';
          } else if ($opacity == '20%') {
            //$opacitycalc = '0.8';
            $opacitycalc = '0.2';
          } else if ($opacity == '30%') {
            //$opacitycalc = '0.7';
            $opacitycalc = '0.3';
          } else if ($opacity == '40%') {
            //$opacitycalc = '0.6';
            $opacitycalc = '0.4';
          } else if ($opacity == '50%') {
            //$opacitycalc = '0.5';
            $opacitycalc = '0.5';
          } else if ($opacity == '60%') {
            //$opacitycalc = '0.4';
            $opacitycalc = '0.6';
          } else if ($opacity == '70%') {
            //$opacitycalc = '0.3';
            $opacitycalc = '0.7';
          } else if ($opacity == '80%') {
            //$opacitycalc = '0.2';
            $opacitycalc = '0.8';
          } else if ($opacity == '90%') {
            //$opacitycalc = '0.1';
            $opacitycalc = '0.9';
          } else if ($opacity == '100%') {
            //$opacitycalc = '0.0';
            $opacitycalc = '1';
          } else {
            $opacitycalc = '1';
          }
        
        } else {
          // Thumb vars
          $color = 0;
          $textcolor = 0;
          $hovertextcolor = 0;
          $opacitycalc = '1.0';
        }
        
      ?>
      
      <a href="<?php the_permalink(); ?>" class="history thumb row-thumb row-thumb-archive <?php if ($pagetype == 'single' || $pagetype == 'page') { if ($wp_query->post->ID == $postid || $wp_query->post->ID == $this_page_id) {echo 'active';} } ?> <?php if (get_field("advanced_thumbnail")) {echo 'advanced';} ?>" <?php if ($opacitycalc) {echo 'data-opacity="'.$opacitycalc.'"';} ?> <?php if ($color) {echo 'data-bg-color="'.$color.'"';} ?> <?php if ($textcolor) {echo 'data-text-color="'.$textcolor.'"';} ?> <?php if ($hovertextcolor) {echo 'data-hover-text-color="'.$hovertextcolor.'"';} ?>>
        
        <div class="img-holder row-img">
        
            <?php

            $attachment_id = get_field('thumbnail_image');
            $attachment_id_2 = get_field("thumbnail_image_hover");

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
            $image_hover = wp_get_attachment_image_src($attachment_id_2, $size); 
            
            ?>
        
          <?php if ($image_hover[0]) { ?>
          <div class="hover-image">
            <img class="reverse" src="<?php echo $image_hover[0]; ?>" data-width="<?php echo $image_hover[1]; ?>" data-height="<?php echo $image_hover[2]; ?>" />
          </div>
          <?php } ?>
          <div class="figcaption-bg" style="<?php if ($color) { echo 'background:' . $color .';'; } ?> -ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=<?php echo $opacitycalc *100; ?>)';filter: alpha(opacity=<?php echo $opacitycalc *100; ?>);-moz-opacity: <?php echo $opacitycalc; ?>;-khtml-opacity: <?php echo $opacitycalc; ?>;opacity: <?php echo $opacitycalc; ?>;">&nbsp;</div>
          <?php if (get_field('thumbnail_title')) { ?>
            <div class="figcaption <?php echo $row_item_overlay_text_size; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 0px solid transparent; text-decoration: underline;';} else { echo 'border-bottom: 0px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
            </div>
          <?php } else { ?>
            <div class="figcaption <?php echo $row_item_overlay_text_size; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 0px solid transparent; text-decoration: underline;';} else { echo 'border-bottom: 0px solid transparent'; }} ?>"><?php echo the_title(); ?></span>
            </div>
          <?php } ?>

          <?php

         		  $rand = rand(0,2);
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
           		  $img = 'row-portrait-blue.png';
         		  } else if ($rand == 7) {
           		  $img = 'row-square-blue.png';
         		  } else if ($rand == 8) {
           		  $img = 'row-landscape-blue.png';
         		  } else if ($rand == 9) {
           		  $img = 'row-portrait-grey.png';
         		  } else if ($rand == 10) {
           		  $img = 'row-square-grey.png';
         		  } else if ($rand == 11) {
           		  $img = 'row-landscape-grey.png';
         		  }
         		  
         		  echo '<img class="reverse" src="'  . get_bloginfo('stylesheet_directory') . '/images/'.$img.'" data-width="400" data-height="400" />' ;

          ?>          
        </div>
      
      </a>
      
    </div>
  </div>
  
<?php } ?>

<?php } ?>