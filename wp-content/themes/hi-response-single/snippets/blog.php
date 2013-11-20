<?php 
$module_padding_top = get_sub_field("module_padding_top"); 
$module_padding_bottom = get_sub_field("module_padding_bottom"); 
$template = get_sub_field("template");

if ($template == 'Left 50%') {
  $templatecol = '50';
  $templatepush = '0';
} else if ($template == 'Left 75%') {
  $templatecol = '75';
  $templatepush = '0';
} else if ($template == 'Center 50%') {
  $templatecol = '50';
  $templatepush = '25';
} else if ($template == 'Center 75%') {
  $templatecol = '75';
  $templatepush = '12';
} else if ($template == 'Right 50%') {
  $templatecol = '50';
  $templatepush = '25';
} else if ($template == 'Right 75%') {
  $templatecol = '75';
  $templatepush = '25';
}
?>

	<div class="blog-module module <?php if ($module_padding_top) {echo 'mpt-' .$module_padding_top;} ?> <?php if ($module_padding_bottom) {echo 'mpb-' .$module_padding_bottom;} ?>">
	
	   <?php if ($template == 'Right 75%' || $template == 'Right 50%' || $template == 'Center 50%' || $template == 'Center 75%') { ?>
	     <div class="col col-<?php echo $templatepush; ?> <?php if ($template == 'Right 50%') {echo 'push-25';} ?>">
  	     <div class="col-inner-hori">
  	      <div class="date default lb-1">
  	       <?php include('blog_date.php'); ?>
  	      </div>
  	      <?php if (is_category() || is_tag()) { ?>
  	      <a href="<?php the_permalink(); ?>" class="history default lb-1 permalink"><?php if ($copy_1) {echo $copy_1;} ?></a><br/><br/>
  	      <?php } ?>
  	     </div>
	     </div>
	   <?php } ?>
	     
	  <div class="col col-<?php echo $templatecol; ?>">
	    <div class="col-inner-hori">

<?php

  while(has_sub_field("content_type")):
 
  	if(get_row_layout() == "title") { ?>
  	
  	   <?php 
  	   $title = get_sub_field("title");
  	   $textsize = get_sub_field("text_size");
  	   $textalign = get_sub_field("text_align");
  	   $textcolor = get_sub_field("text_color");
  	   $linebreak = get_sub_field("line_break");
  	   ?>
  	   <?php if ($title) { ?>
  	     <h2 class="<?php echo $linebreak; ?> <?php if ($textalign) {echo $textalign;} ?> <?php if ($textsize) {echo $textsize;} ?>" style="<?php if ($textcolor) {echo 'color: '.$textcolor.';';}; ?>"><?php echo $title; ?></h2>
  	   <?php } ?>
  	<?php } else if(get_row_layout() == "paragraph") { ?>
  	
  	  <?php 
  	  $paragraph = get_sub_field("paragraph");
  	  $textsize = get_sub_field("text_size");
  	  $textalign = get_sub_field("text_align");
  	  $textcolor = get_sub_field("text_color");
  	  $linebreak = get_sub_field("line_break");
  	  ?>
  	  <?php if ($paragraph) { ?>
  	  <p class="<?php echo $linebreak; ?> <?php if ($textalign) {echo $textalign;} ?> <?php if ($textsize) {echo $textsize;} ?>" style="<?php if ($textcolor) {echo 'color: '.$textcolor.';';}; ?>">
    	  <?php echo $paragraph; ?>
      </p>
      <?php } ?>
      
  	<?php } else if(get_row_layout() == "quote") { ?>
  	
  	  <?php 
  	  $quote = get_sub_field("quote_text");
  	  $quoter = get_sub_field("quoter_name");
  	  $textsize = get_sub_field("text_size");
  	  $textalign = get_sub_field("text_align");
  	  $textcolor = get_sub_field("text_color");
  	  $linebreak = get_sub_field("line_break");
  	  ?>
  	  <?php if ($quote) { ?>
  	  <blockquote class="<?php echo $linebreak; ?> <?php if ($textalign) {echo $textalign;} ?> <?php if ($textsize) {echo $textsize;} ?>" style="<?php if ($textcolor) {echo 'color: '.$textcolor.';';}; ?>">
    	  <p>"<?php echo $quote; ?>"</p>
    	  <?php if ($quoter) { ?>
    	    <cite>&mdash; <?php echo $quoter; ?></cite>
    	  <?php } ?>
      </blockquote>
      <?php } ?>
      
  	<?php } else if(get_row_layout() == "image") { ?>

      <?php if (get_sub_field('image')) {
        $attachment_id = get_sub_field('image');
        $size = "large";
        $image = wp_get_attachment_image_src($attachment_id, $size);
        $linebreak = get_sub_field("line_break");
        echo '<div class="default '.$linebreak.'">';
     		echo '<div class="img-holder">';
     		
        if (get_sub_field('image_focus_button')) { ?>
          <div class="focus-mode <?php echo $focus_icon_size; ?>" <?php if (get_sub_field('image_focus_button_color')) {echo 'style="color: '.get_sub_field('image_focus_button_color').'"';} ?>>
            <span class="icons"><?php if ($media_focus_icon == 'Expand 1') {echo 'P';} else if ($media_focus_icon == 'Expand 2') {echo 'Q';} else {echo 'R';} ?></span>
          </div>
        <?php }
     		
     		echo '<img src="'  . $image[0] . '" data-width="'  . $image[1] . '" data-height="'  . $image[2] . '" />';
     		echo '</div>';
     		
        $caption = get_sub_field('caption');
        $captiontextalign = get_sub_field('caption_text_align');
        
        if ($caption) {
          echo '<div class="figcaption '.$captions_text_size . ' '.$captiontextalign.'">';
          echo $caption;
          echo '</div>';
        }
        
        echo '</div>';
     		
      } else {
        $linebreak = get_sub_field("line_break");
        echo '<div class="default '.$linebreak.'">';
        echo '<div class="img-holder"><img src="'  . get_bloginfo('stylesheet_directory') . '/images/slide.png" data-width="1600" data-height="900" /></div>';
        
        $caption = get_sub_field('caption');
        $captiontextalign = get_sub_field('caption_text_align');
        
        if ($caption) {
          echo '<div class="figcaption '.$captions_text_size . ' '.$captiontextalign.'">';
          echo $caption;
          echo '</div>';
        }
        
        echo '</div>';
        
      } ?>

  	<?php } else if(get_row_layout() == "embed") { ?>

      <?php if (get_sub_field('input')) { ?>
        
          <?php 
          $input = get_sub_field('input');
          $caption = get_sub_field('caption');
          $captiontextalign = get_sub_field('caption_text_align');
          $linebreak = get_sub_field("line_break");
          
          echo '<div class="default '.$linebreak.'">';
          echo $input;
          
          if ($caption) {
            echo '<div class="figcaption '.$captions_text_size.' '.$captiontextalign.'">';
            echo $caption;
            echo '</div>';
          }
          echo '</div>';
          ?>
        
      <?php } ?>
      
  	<?php } else if(get_row_layout() == "slideshow") { ?>
        
          <?php 

          $linebreak = get_sub_field("line_break");
          $color = get_sub_field("slideshow_override_color");
          
          echo '<div class="default '.$linebreak.'">'; ?>

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
            <p class="flex-caption <?php echo $captions_text_size; ?> <?php echo get_sub_field("caption_align"); ?>">
              <?php echo get_sub_field('caption'); ?>
            </p>
            <?php }
            echo '</li>';
            
         	} else {

           	echo '<li>';
         	  echo '<img src="' . get_bloginfo('stylesheet_directory') . '/images/slide.png" class="notme" data-rsw="800" data-rsh="450" />' ;
         		if (get_sub_field('caption')) { ?>
            <p class="flex-caption <?php echo $captions_text_size; ?> <?php echo get_sub_field("caption_align"); ?>">
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


          <?php echo '</div>';
          ?>
        

  	<?php } else if(get_row_layout() == "link") { ?>
  	
      <?php if (get_sub_field('url')) {
        $url = get_sub_field('url');
        $textalign = get_sub_field('text_align');
        $textsize = get_sub_field('text_size');
        $title = get_sub_field('title');
        $linebreak = get_sub_field('line_break'); 
        $target = get_sub_field('target');
        $history = get_sub_field('history_powered'); 
      ?>
        
        <p class="blog-link <?php echo $textalign; ?> <?php echo $textsize; ?> <?php if ($linebreak) {echo $linebreak;} ?>">
          <a href="<?php echo $url; ?>" class="blog-ext-link <?php if ($history) { echo 'history';} ?>" target="<?php echo $target; ?>"><?php echo $title; ?></a>
        </p>
        
      <?php } ?>
      
  	<?php }
 
  endwhile; 
  
  ?>
  
  <div class="default lb-1">
    <?php the_tags('<ul><li class="small"><span class="icons">A</span> ','</li><li class="small"><span class="icons">A</span> ','</li></ul>'); ?>
  </div>

	    </div>
	  </div>
	  
	   <?php if ($template == 'Left 75%' || $template == 'Left 50%') { ?>
	     <div class="col col-<?php echo $templatepush; ?>">
  	     <div class="col-inner-hori">
  	      <div class="date default lb-1">
            <?php include('blog_date.php'); ?>
  	      </div>
  	      <?php if (is_category() || is_tag()) { ?>
  	      <a href="<?php the_permalink(); ?>" class="history default lb-1 permalink"><?php if ($copy_1) {echo $copy_1;} ?></a><br/><br/>
  	      <?php } ?>
  	     </div>
	     </div>
	   <?php } ?>
	  
	</div>