<?php 

// If value is set to override the grid settings for this module
$override_grid_gutter = get_sub_field("grid_gutter");
$override_grid_gutter = str_replace('px', '', $override_grid_gutter);
$grid_diff = $grid_gutter - $override_grid_gutter;

if(get_sub_field("column_repeater")): ?>

  <?php 
  $module_padding_top = get_sub_field("module_padding_top"); 
  $module_padding_bottom = get_sub_field("module_padding_bottom"); 
  ?>
  	
	<div class="text-module module <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>" style="<?php if ($override_grid_gutter) {echo 'margin-left: '.$grid_diff.'px !important; margin-right: '.$grid_diff.'px !important; overflow: auto;';} ?>">
	<?php while(has_sub_field('column_repeater')): ?>
	   
    <?php 
    $width = get_sub_field("width"); 
    $width = str_replace('%', '', $width);
    $push = get_sub_field("push");
    $push = str_replace('%', '', $push);
    $clear = get_sub_field("clear");
    $float = get_sub_field("float");
    ?>
	  <div class="col col-<?php echo $width ?> push-<?php echo $push ?> <?php echo $float ?> <?php if ($clear == true) { echo 'clear';} ?>">
	    <div class="col-inner-hori" <?php if ($override_grid_gutter) {echo 'style="margin-left: '.$override_grid_gutter.'px !important; margin-right: '.$override_grid_gutter.'px !important;"';} ?>>
		    
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
	
<?php endif; ?>