        <?php 
          $queried_object = get_queried_object(); 
          $taxonomy = $queried_object->taxonomy;
          $term_id = $queried_object->term_id;  
        ?>

        <?php if (get_field('section_menu_state', $taxonomy . '_' . $term_id)) { ?>
          <?php include('separator-tight.php'); ?>
          <div class="module mpt-lb-0 mpb-lb-2">

            <?php if(get_field('section_menu', $taxonomy . '_' . $term_id)): ?>
            	<?php while(has_sub_field('section_menu', $taxonomy . '_' . $term_id)): ?>
            	  
            		<?php $width = get_sub_field('menu_item_width', $taxonomy . '_' . $term_id); ?>
            		<div class="col col-<?php echo $width; ?> col-padd-hori <?php $txt_size = get_sub_field('column_text_size', $taxonomy . '_' . $term_id); if ($txt_size) { echo $txt_size; }; ?>">
            		
            		<?php $txt = get_sub_field('column_title', $taxonomy . '_' . $term_id); if ($txt) { echo $txt . ''; }; ?>
            		
                <?php if(get_sub_field("menu_item", $taxonomy . '_' . $term_id)) { ?>
  
                  <?php while(has_sub_field("menu_item", $taxonomy . '_' . $term_id)): ?>
   
                    <a href="<?php echo get_sub_field('menu_item_link', $taxonomy . '_' . $term_id); ?>" class="<?php if (get_sub_field('history_powered', $taxonomy . '_' . $term_id)) {echo 'history';} ?> <?php if (get_sub_field('marked', $taxonomy . '_' . $term_id)) {echo 'marked';} ?>" target="<?php echo get_sub_field('target', $taxonomy . '_' . $term_id); ?>"><?php echo get_sub_field('menu_item_title', $taxonomy . '_' . $term_id); ?></a><br/>
   
                  <?php endwhile; ?>
  
                <?php } else { ?>
                  &nbsp;
                <?php } ?>
            		</div> 
            		            		
            	<?php endwhile; ?>
            <?php endif; ?>

          </div>
        <?php } ?>