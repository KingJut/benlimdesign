<?php if (in_category('Inactive')) { 
  // If post is 'dimmed'
?>
  
<?php } else { ?>

<?php 
  
if (is_archive()) {
  if (get_sub_field("thumbs_width")) {
    // Is stacked
    $thumbswidth = get_sub_field("thumbs_width");
    $thumbswidth = str_replace('%', '', $thumbswidth);
    $thumbs_title_style = get_sub_field("thumbs_title_style");
    $thumbnails_title_position = get_sub_field("thumbs_overlay_title_position");
    $thumbnails_title_align = get_sub_field("thumbs_below_align");
  } else {
    // Default Archives
    $thumbswidth = get_field('thumbs_width', $taxonomy . '_' . $term_id);
      if ($thumbswidth == '12.5%') {
        $thumbswidth = 12;
      } else if ($thumbswidth == '50%') {
        $thumbswidth = 50;
      } else {
        $thumbswidth = 25;
      }
    $thumbs_title_style = get_field('thumbs_title_style', $taxonomy . '_' . $term_id);
    $thumbnails_title_position = get_field('thumbs_overlay_title_position', $taxonomy . '_' . $term_id);
    $thumbnails_title_align = get_field('thumbs_below_align', $taxonomy . '_' . $term_id);
  }
}

if (is_home()) {
  // Frontpage
  $thumbswidth = get_field('frontpage_thumbnails_width', 'option');
  if ($thumbswidth == '12.5%') {
    $thumbswidth = 12;
  } else if ($thumbswidth == '50%') {
    $thumbswidth = 50;
  } else {
    $thumbswidth = 25;
  }
  $thumbs_title_style = get_field('frontpage_thumbnails_title_style', 'option');
  $thumbnails_title_position = get_field('frontpage_thumbnails_overlay_title_position', 'option');
  $thumbnails_title_align = get_field('frontpage_thumbnails_below_align', 'option');
}

if (is_page('Search') || is_search()) {
  // Searchpage
  $thumbswidth = get_field('search_thumbnails_width', 'option');
  if ($thumbswidth == '12.5%') {
    $thumbswidth = 12;
  } else if ($thumbswidth == '50%') {
    $thumbswidth = 50;
  } else {
    $thumbswidth = 25;
  }
  $thumbs_title_style = get_field('search_thumbnails_title_style', 'option');
  $thumbnails_title_position = get_field('search_thumbnails_overlay_title_position', 'option');
  $thumbnails_title_align = get_field('search_thumbnails_below_align', 'option');
}

?>

<?php if(get_field("thumbnail_image")) { ?>
    
    <!-- Grid Item -->
    <div class="item thumb-item col col-<?php if ($thumbswidth) {echo $thumbswidth;} else {echo '25';} ?>">
      <div class="col-inner" style="<?php if ($state) {echo 'margin: '.$override_grid_gutter.'px !important;';} ?>">
      
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
          $opacitycalc = '1';
        }
        
      ?>
        
        <a href="<?php the_permalink(); ?>" class="history thumb <?php if ($pagetype == 'single' || $pagetype == 'page') { if ($wp_query->post->ID == $postid || $wp_query->post->ID == $this_page_id) {echo 'active';} } ?> <?php if (get_field("advanced_thumbnail")) {echo 'advanced';} ?>" <?php if ($opacitycalc) {echo 'data-opacity="'.$opacitycalc.'"';} ?> <?php if ($color) {echo 'data-bg-color="'.$color.'"';} ?> <?php if ($textcolor) {echo 'data-text-color="'.$textcolor.'"';} ?> <?php if ($hovertextcolor) {echo 'data-hover-text-color="'.$hovertextcolor.'"';} ?>>
          
          <div class="img-holder">
            <?php

            $attachment_id = get_field("thumbnail_image");
            $attachment_id_2 = get_field("thumbnail_image_hover");

       	    if ($detect->isMobile()) {
              if($detect->isTablet()){
                if ($thumbswidth == 25) {
                  $size = "medium";
                } else {
                  $size = "large";
                }
       	      } else {
                if ($thumbswidth == 25) {
                  $size = "thumbnail";
                } else {
                  $size = "medium";
                }
       	      }
            } else {
              if ($thumbswidth == 25) {
                $size = "thumbnail";
              } else {
                $size = "medium";
              }
            }

            $image = wp_get_attachment_image_src($attachment_id, $size);
            $image_hover = wp_get_attachment_image_src($attachment_id_2, $size);
            
            ?>
            
            <img src="<?php echo $image[0]; ?>" data-width="<?php echo $image[1]; ?>" data-height="<?php echo $image[2]; ?>" <?php if ($image_hover[0]) { echo 'data-hoversrc="' . $image_hover[0] . '"'; } ?> />
            
            <?php if ($color) { ?>
            <div class="thumb-hover" style="background:<?php echo $color; ?>;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=<?php echo $opacitycalc *100; ?>)';filter: alpha(opacity=<?php echo $opacitycalc *100; ?>);-moz-opacity: <?php echo $opacitycalc; ?>;-khtml-opacity: <?php echo $opacitycalc; ?>;opacity: <?php echo $opacitycalc; ?>;">
              &nbsp;
            </div>
            <?php } else { ?>
            <div class="thumb-hover" style="background:transparent !important;">
              &nbsp;
            </div>
            <?php } ?>
            
            <?php if ($image_hover[0]) { ?>
            <div class="hover-image">
              <img src="<?php echo $image_hover[0]; ?>" data-width="<?php echo $image_hover[1]; ?>" data-height="<?php echo $image_hover[2]; ?>" />
            </div>
            <?php } ?>
            
            <?php if ($thumbs_title_style == 'Overlay') { ?>
            <div class="figcaption <?php echo $thumbnails_title_text_size; ?>">
              <?php if ($thumbnails_title_position == 'Center') { ?>
                  <?php if (get_field('thumbnail_title')) { ?>
                    <div class="vcenter p0 <?php echo $thumbnails_title_position; ?>">
                      <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
                    </div>
                  <?php } else { ?>
                    <div class="vcenter p0 <?php echo $thumbnails_title_position; ?>">
                      <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
                    </div>
                  <?php } ?>

                <?php } else { ?>
                  <?php if (get_field('thumbnail_title')) { ?>
                    <div class="<?php echo $thumbnails_title_position; ?>">
                      <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
                    </div>
                  <?php } else { ?>
                    <div class="<?php echo $thumbnails_title_position; ?>">
                      <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
                    </div>
                  <?php } ?>
              <?php } ?>
              
            </div>
            <?php } ?>
            
          </div>
        
          <?php if ($thumbs_title_style == 'Below') { ?>
            <?php if (get_field('thumbnail_title')) { ?>
              <div class="figcaption stick <?php echo $thumbnails_title_text_size; ?> <?php echo $thumbnails_title_align; ?>">
                <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
              </div>
            <?php } else { ?>
              <div class="figcaption stick <?php echo $thumbnails_title_text_size; ?> <?php echo $thumbnails_title_align; ?>">
                <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
              </div>
            <?php } ?>
          <?php } ?>
        
        </a>
        
      </div>
    </div>

<?php } else { ?>
  
    <!-- Grid Item -->
    <div class="item thumb-item col col-<?php if ($thumbswidth) {echo $thumbswidth;} else {echo '25';} ?>">
      <div class="col-inner" style="<?php if ($state) {echo 'margin: '.$override_grid_gutter.'px !important;';} ?>">
    
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
          $opacitycalc = '1';
        }
        
      ?>
      
      <a href="<?php the_permalink(); ?>" class="history thumb <?php if ($pagetype == 'single' || $pagetype == 'page') { if ($wp_query->post->ID == $postid || $wp_query->post->ID == $this_page_id) {echo 'active';} } ?> <?php if (get_field("advanced_thumbnail")) {echo 'advanced';} ?>" <?php if ($opacitycalc) {echo 'data-opacity="'.$opacitycalc.'"';} ?> <?php if ($color) {echo 'data-bg-color="'.$color.'"';} ?> <?php if ($textcolor) {echo 'data-text-color="'.$textcolor.'"';} ?> <?php if ($hovertextcolor) {echo 'data-hover-text-color="'.$hovertextcolor.'"';} ?>>
        
        <div class="img-holder">
          <?php

          echo '<img src="'  . get_bloginfo('stylesheet_directory') . '/images/square.png" data-width="400" data-height="400" />' ;

          ?>
          
            <?php

            $attachment_id = get_field("thumbnail_image");
            $attachment_id_2 = get_field("thumbnail_image_hover");

       	    if ($detect->isMobile()) {
              if($detect->isTablet()){
                if ($thumbswidth == 25) {
                  $size = "medium";
                } else {
                  $size = "large";
                }
       	      } else {
                if ($thumbswidth == 25) {
                  $size = "thumbnail";
                } else {
                  $size = "medium";
                }
       	      }
            } else {
              if ($thumbswidth == 25) {
                $size = "thumbnail";
              } else {
                $size = "medium";
              }
            }

            $image = wp_get_attachment_image_src($attachment_id, $size);
            $image_hover = wp_get_attachment_image_src($attachment_id_2, $size);
            
            ?>
          
          <?php if ($color) { ?>
          <div class="thumb-hover" style="background:<?php echo $color; ?>;-ms-filter:'progid:DXImageTransform.Microsoft.Alpha(Opacity=<?php echo $opacitycalc *100; ?>)';filter: alpha(opacity=<?php echo $opacitycalc *100; ?>);-moz-opacity: <?php echo $opacitycalc; ?>;-khtml-opacity: <?php echo $opacitycalc; ?>;opacity: <?php echo $opacitycalc; ?>;">
            &nbsp;
          </div>
          <?php } else { ?>
          <div class="thumb-hover" style="background:transparent !important;">
            &nbsp;
          </div>
          <?php } ?>
          
          <?php if ($image_hover[0]) { ?>
          <div class="hover-image">
            <img src="<?php echo $image_hover[0]; ?>" data-width="<?php echo $image_hover[1]; ?>" data-height="<?php echo $image_hover[2]; ?>" />
          </div>
          <?php } ?>
          
          <?php if ($thumbs_title_style == 'Overlay') { ?>
          <div class="figcaption <?php echo $thumbnails_title_text_size; ?>">
            <?php if ($thumbnails_title_position == 'Center') { ?>
              <?php if (get_field('thumbnail_title')) { ?>
                <div class="vcenter p0 <?php echo $thumbnails_title_position; ?>">
                  <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
                </div>
              <?php } else { ?>
                <div class="vcenter p0 <?php echo $thumbnails_title_position; ?>">
                  <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
                </div>
              <?php } ?>
            <?php } else { ?>
              <?php if (get_field('thumbnail_title')) { ?>
                <div class="<?php echo $thumbnails_title_position; ?>">
                  <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
                </div>
              <?php } else { ?>
                <div class="<?php echo $thumbnails_title_position; ?>">
                  <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
                </div>
              <?php } ?>
            <?php } ?>
            
          </div>
          <?php } ?>
          
        </div>
      
        <?php if ($thumbs_title_style == 'Below') { ?>
          <?php if (get_field('thumbnail_title')) { ?>
            <div class="figcaption stick <?php echo $thumbnails_title_text_size; ?> <?php echo $thumbnails_title_align; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php echo get_field('thumbnail_title'); ?></span>
            </div>
          <?php } else { ?>
            <div class="figcaption stick <?php echo $thumbnails_title_text_size; ?> <?php echo $thumbnails_title_align; ?>">
              <span class="underline" style="<?php if ($textcolor) {echo 'color:'.$textcolor.';';if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') {echo 'border-bottom: 1px solid '.$textcolor.';';} else { echo 'border-bottom: 1px solid transparent'; }} ?>"><?php the_title(); ?></span>
            </div>
          <?php } ?>
        <?php } ?>
      
      </a>
      
    </div>
  </div>

<?php } ?>

<?php } ?>