          <?php 
          
            $queried_object = get_queried_object(); 
            $taxonomy = $queried_object->taxonomy;
            $term_id = $queried_object->term_id;  
        
          ?>
          
          <?php if (get_field('secondary_menu_state')) { ?>
          
            <div id="secondary_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('secondary_menu_margin_bottom'); ?> <?php echo $secondary_menu_text_size; ?>">
              <?php if ($secondary_menu_render_type == 'Menu top line') {include('separator-secondary-menu.php');} ?>
              <?php echo get_field('secondary_menu_nav_select'); ?>
            </div>
          
          <?php } else if (get_field('secondary_menu_state', $taxonomy . '_' . $term_id)) { ?>
        
            <div id="secondary_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('secondary_menu_margin_bottom', $taxonomy . '_' . $term_id); ?> <?php echo $secondary_menu_text_size; ?>">
              <?php if ($secondary_menu_render_type == 'Menu top line') {include('separator-secondary-menu.php');} ?>
              <?php echo get_field('secondary_menu_nav_select', $taxonomy . '_' . $term_id); ?>
            </div>
            
          <?php } else if (get_field('frontpage_secondary_menu_state', 'options') && is_front_page()) { ?>
        
            <div id="secondary_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('frontpage_secondary_menu_margin_bottom', 'options'); ?> <?php echo $secondary_menu_text_size; ?>">
              <?php if ($secondary_menu_render_type == 'Menu top line') {include('separator-secondary-menu.php');} ?>
              <?php echo get_field('frontpage_secondary_menu_nav_select', 'options'); ?>
            </div>
            
          <?php } else if (get_field('search_secondary_menu_state', 'options')) { ?>
          
            <?php if ($search_identifier && is_page($search_identifier->ID)) { ?>
        
            <div id="secondary_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('search_secondary_menu_margin_bottom', 'options'); ?> <?php echo $secondary_menu_text_size; ?>">
              <?php if ($secondary_menu_render_type == 'Menu top line') {include('separator-secondary-menu.php');} ?>
              <?php echo get_field('search_secondary_menu_nav_select', 'options'); ?>
            </div>
            
            <?php } ?>
        
          <?php } ?>
