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
        <div class="item-content col-inner-hori" style="<?php if ($state) {echo 'margin-left: '.$override_grid_gutter.'px !important; margin-right: '.$override_grid_gutter.'px !important;';} ?> <?php if ($state) {echo 'margin-top: '.$override_grid_gutter.'px !important;';} ?> <?php if ($state) {echo 'margin-bottom: '.$override_grid_gutter.'px !important;';} ?>">

		    <?php if(get_sub_field('text_repeater')) { ?>
		    
  		    <?php while(has_sub_field('text_repeater')): $textalign = get_sub_field("text_align"); $linebreak = get_sub_field("line_break"); ?>
  		      <?php if (get_sub_field('text_type') == 'Title') { ?>
  		        <h2 class="<?php echo $linebreak; ?> <?php if (get_sub_field("text_size") == true) {echo get_sub_field("text_size");} ?> <?php if ($textalign) {echo $textalign;} ?>" <?php if (get_sub_field("text_color")) {echo 'style="color:' . get_sub_field("text_color") . '"';} ?>><?php the_sub_field("text"); ?></h2>
  		      <?php } else if (get_sub_field('text_type') == 'Paragraph') { ?>
  		        <p class="<?php echo $linebreak; ?> <?php if (get_sub_field("text_size") == true) {echo get_sub_field("text_size");} ?> <?php if ($textalign) {echo $textalign;} ?>" <?php if (get_sub_field("text_color")) {echo 'style="color:' . get_sub_field("text_color") . '"';} ?>><?php the_sub_field("text"); ?></p>
  		      <?php } else { ?>
  		        <div class="<?php echo $linebreak; ?> <?php if (get_sub_field("text_size") == true) {echo get_sub_field("text_size");} ?> <?php if ($textalign) {echo $textalign;} ?>" <?php if (get_sub_field("text_color")) {echo 'style="color:' . get_sub_field("text_color") . '"';} ?>><?php the_sub_field("text"); ?></div>
  		      <?php } ?>
  		    <?php endwhile; ?>
		    
		    <?php } else { ?>
		      &nbsp;
		    <?php } ?>

        </div>
      </div>
      <?php endwhile; ?>
    
    </div>
  </div>
</div>

<?php endif; ?>