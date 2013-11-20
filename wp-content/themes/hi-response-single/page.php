<?php include('header.php'); ?>

<?php if ($search_identifier && is_page($search_identifier->ID)) { ?>

	<div id="content">
	  
	  <?php if (is_page()) {$pagetype = 'page';} ?>
	  <?php 
  	  include('snippets/bg-search.php');
  	  include('snippets/search-style.php');
  	  include('snippets/bg-tiled-search.php'); 
    ?>
	  <div id="block" <?php 
	  if ($detect->isMobile()) {if($detect->isTablet()){
  	  /* Tab */
  	  if (get_field("search_override_header_position", "options") && get_field("search_tablet_header_position", "options")) {echo 'data-header-position="'.get_field("search_tablet_header_position", "options").'"';} else {echo 'data-header-position="'.$tablet_header_position.'"';};
    } else {
      /* Mob */ }
      if (get_field("search_override_header_position", "options") && get_field("search_mobile_header_position", "options")) {echo 'data-header-position="'.get_field("search_mobile_header_position", "options").'"';} else {echo 'data-header-position="'.$mobile_header_position.'"';};
    } else {
      /* Desc */
      if (get_field("search_override_header_position", "options") && get_field("search_header_position", "options")) {echo 'data-header-position="'.get_field("search_header_position", "options").'"';} else {echo 'data-header-position="'.$header_position.'"';};
    } 
    ?>>&nbsp;</div>
    
	  <?php include 'snippets/secondary-menu.php'; ?>
	  <?php include 'snippets/section-menu.php'; ?>
	
   	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   	  
    	<?php get_search_form(); ?>
      
  	<?php endwhile; else: ?>
      <div class="col col-100">
        <div class="col-inner-hori">
          <p>Sorry, no pages matched your criteria.</p>
        </div>
      </div>
   	<?php endif; ?>

	</div>
	
<?php } else { ?>

	<div id="content">
	
  	<?php if (!in_category('Inactive') && get_field("page_template") == 'Custom') {
    	include('snippets/bg.php');
    } else if (!in_category('Inactive') && get_field("page_template") == 'Inherit Category') {
      $term_obj = get_field("inherit_template");
      $term_id = $term_obj->term_id;
      include('snippets/bg-archive.php');
    } ?>
	  <div id="block" <?php 
	  if (get_field("page_template") == 'Inherit Category') {
	  
      $term_obj = get_field("inherit_template");
      $term_id = $term_obj->term_id;
      $taxonomy = $term_obj->taxonomy;
	  
  	  if ($detect->isMobile()) {
  	    if($detect->isTablet()) {
    	    // Tab
          if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('tablet_header_position', $taxonomy . '_' . $term_id)) {
            echo 'data-header-position="'. get_field('tablet_header_position', $taxonomy . '_' . $term_id) .'"';} else {echo 'data-header-position="'.$tablet_header_position.'"';
          }
        } else {
          // Mob
          if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('mobile_header_position', $taxonomy . '_' . $term_id)) {
            echo 'data-header-position="'. get_field('mobile_header_position', $taxonomy . '_' . $term_id) .'"';} else {echo 'data-header-position="'.$mobile_header_position.'"';
          }
        }
      } else {
        // Desc
        if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('header_position', $taxonomy . '_' . $term_id)) {
          echo 'data-header-position="'. get_field('header_position', $taxonomy . '_' . $term_id) .'"';} else {echo 'data-header-position="'.$header_position.'"';
        }
      }
      
    } else if (get_field("page_template") == 'Custom') {
    
  	  if ($detect->isMobile()) {if($detect->isTablet()){
    	  /* Tab */
    	  if (get_field("override_header_position") && get_field("tablet_header_position")) {echo 'data-header-position="'.get_field("tablet_header_position").'"';} else {echo 'data-header-position="'.$tablet_header_position.'"';};
      } else {
        /* Mob */ }
        if (get_field("override_header_position") && get_field("mobile_header_position")) {echo 'data-header-position="'.get_field("mobile_header_position").'"';} else {echo 'data-header-position="'.$mobile_header_position.'"';};
      } else {
        /* Desc */
        if (get_field("override_header_position") && get_field("header_position")) {echo 'data-header-position="'.get_field("header_position").'"';} else {echo 'data-header-position="'.$header_position.'"';};
      }
      
	  } else {
      
  	  if ($detect->isMobile()) {if($detect->isTablet()){
    	  /* Tab */
    	  echo 'data-header-position="'.get_field('tablet_header_position', 'option').'"';
      } else {
        /* Mob */ }
        echo 'data-header-position="'.get_field('mobile_header_position', 'option').'"';
      } else {
        /* Desc */
        echo 'data-header-position="'.get_field('header_position', 'option').'"';
      } 
	  
	  }
    ?>>&nbsp;</div>
    
	  <?php include 'snippets/secondary-menu.php'; ?>
	  <?php include 'snippets/section-menu.php'; ?>
	
   	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
   	
   	  <?php if (get_field('inactive_state') !== true) { ?>
   	  
        <?php 
        // IF default content editor is turned on 
        if (get_field("default_content_editor") == true) { ?>
     	  <div class="col col-50 col-padd">
     	   <?php the_title(); ?>
     	  </div>
     	  <div class="col col-50 col-padd">
     	   <?php the_content(); ?>
     	  </div>
     	  <?php } ?>
   	    <?php include 'snippets/page-post-title.php'; ?>
        <?php include('snippets/page-post-style.php'); ?>
      	<?php include('layout.php'); ?>
      	
      	<?php $this_page_id = $wp_query->post->ID; ?>
  
      	<?php query_posts(array('orderby' => 'menu_order', 'order' => 'ASC', 'post_parent' => $this_page_id, 'post_type' => 'page')); while (have_posts()) { the_post(); ?>
  
                  <div class="stack-childpage">
                  <?php include('snippets/page-post-title.php'); ?>
                  <?php include('layout.php'); ?>
                  </div>
  
          <?php } ?>
          <?php wp_reset_query(); ?>
        
        <?php comments_template(); ?>
      
      
      <?php } else { ?>
        <?php if (get_field('inactive_state_message') == true) { ?>
        <?php include('snippets/page-post-style.php'); ?>
        <div id="dimmed-page" class="vcenter hcenter">
          <p class="large lb-0 align-center pr0"><?php echo get_field('inactive_state_message'); ?></p>
        </div>
        <?php } ?>
      <?php } ?>
      
      <?php if (get_field('inactive_state') !== true) { ?>

        <?php while(the_flexible_field("stack")): ?>
        
          <?php 
            // Stack Universals
        	  $stack_margin_top = get_sub_field("stack_margin_top");
        	  $stack_margin_bottom = get_sub_field("stack_margin_bottom");
        	  if (get_sub_field("number_of_posts")) {
          	  $number_of_posts = get_sub_field("number_of_posts");
            } else {
              $number_of_posts = $posts_per_page;
            }
          ?>
        
          <?php if(get_row_layout() == "post_page"): ?>
            
            <?php 
            
          		$post = get_sub_field('stack');
          		$post_id = $post->ID;
          		$post_type = $post->post_type;
          		
          		if ($post_type == 'page') {
                $args = array(
              	  'page_id' => $post_id,
              	  'posts_per_page' => '1'
                );
              } else {
                $args = array(
              	  'p' => $post_id,
              	  'posts_per_page' => '1'
                );
              }
        
              query_posts($args);
              if (have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php include 'snippets/page-post-stack-title.php'; ?>
                <div class="stack <?php if ($stack_margin_top) {echo 'smt-' .$stack_margin_top;} ?> <?php if ($stack_margin_bottom) {echo 'smb-' .$stack_margin_bottom;} ?>">
                  <?php include('layout.php'); ?>
                </div>
              <?php endwhile; else: 
                echo '<div class="col col-100"><div class="col-inner-hori"><p>Sorry, no page matched your criteria.</p></div></div>';
              endif; wp_reset_query();
            
            ?>
            
          <?php elseif(get_row_layout() == "category"): ?>

      	    <?php $cat = get_sub_field('stack'); ?>
      	    <div class="stack <?php if ($stack_margin_top) {echo 'smt-' .$stack_margin_top;} ?> <?php if ($stack_margin_bottom) {echo 'smb-' .$stack_margin_bottom;} ?>">
            <?php include('layout-category-stacked.php'); ?>
      	    </div>

          <?php elseif(get_row_layout() == "tag"): ?>

      	    <?php $tag = get_sub_field('stack'); ?>
      	    <div class="stack <?php if ($stack_margin_top) {echo 'smt-' .$stack_margin_top;} ?> <?php if ($stack_margin_bottom) {echo 'smb-' .$stack_margin_bottom;} ?>">
            <?php include('layout-tag-stacked.php'); ?>
      	    </div>

          <?php elseif(get_row_layout() == "separator"): ?>
            <div class="stack <?php if ($stack_margin_top) {echo 'smt-' .$stack_margin_top;} ?> <?php if ($stack_margin_bottom) {echo 'smb-' .$stack_margin_bottom;} ?>">
            <?php include('snippets/separator.php'); ?>
            </div>
            
          <?php endif; ?>
          
        <?php endwhile; ?>

      <?php } ?>
      
  	<?php endwhile; else: ?>
      <div class="col col-100">
        <div class="col-inner-hori">
          <p>Sorry, no pages matched your criteria.</p>
        </div>
      </div>
   	<?php endif; ?>

	</div>

<?php } ?>

<?php include('footer.php'); ?>