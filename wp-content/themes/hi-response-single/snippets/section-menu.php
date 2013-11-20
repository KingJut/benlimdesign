          <?php 
          
            $queried_object = get_queried_object(); 
            $taxonomy = $queried_object->taxonomy;
            $term_id = $queried_object->term_id;  
        
          ?>

          <?php if (get_field('section_menu_state')) { ?>
          
            <div id="section_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('section_menu_margin_bottom'); ?> <?php echo $section_menu_text_size; ?>">
              <?php if ($section_menu_render_type == 'Menu top line') {include('separator-section-menu.php');} ?>
              <?php echo get_field('section_menu_nav_select'); ?>
            </div>
          
          <?php } else if (get_field('section_menu_state', $taxonomy . '_' . $term_id)) { ?>
          
            <div id="section_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('section_menu_margin_bottom', $taxonomy . '_' . $term_id); ?> <?php echo $section_menu_text_size; ?>">
              <?php if ($section_menu_render_type == 'Menu top line') {include('separator-section-menu.php');} ?>
              <?php echo get_field('section_menu_nav_select', $taxonomy . '_' . $term_id); ?>
            </div>
            
          <?php } else if (get_field('frontpage_section_menu_state', 'options') && is_front_page()) { ?>
          
            <div id="section_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('frontpage_section_menu_margin_bottom', 'options'); ?> <?php echo $section_menu_text_size; ?>">
              <?php if ($section_menu_render_type == 'Menu top line') {include('separator-section-menu.php');} ?>
              <?php echo get_field('frontpage_section_menu_nav_select', 'options'); ?>
            </div>
            
          <?php } else if (get_field('search_section_menu_state', 'options')) { ?>
          
            <?php if ($search_identifier && is_page($search_identifier->ID)) { ?>
          
            <div id="section_menu_holder" class="module mpt-lb-0 mpb-<?php echo get_field('search_section_menu_margin_bottom', 'options'); ?> <?php echo $section_menu_text_size; ?>">
              <?php if ($section_menu_render_type == 'Menu top line') {include('separator-section-menu.php');} ?>
              <?php echo get_field('search_section_menu_nav_select', 'options'); ?>
            </div>
            
            <?php } ?>
        
          <?php } ?>