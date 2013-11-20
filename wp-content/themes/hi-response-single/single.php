<?php include('header.php'); ?>

	<div id="content">
	  
	  <?php if (is_single()) {$pagetype = 'single';} ?>
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
   	  
   	  <?php if (!in_category('Inactive')) { ?>
        <?php 
        // IF default content editor is turned on 
        if (get_field("default_content_editor") == true) { ?>
        <div class="module mpt-lb-0 mpb-lb-2">
          <div class="col col-50 col-padd">
            <?php the_title(); ?>
          </div>
          <div class="col col-50 col-padd">
            <?php the_content(); ?>
          </div>
        </div>
     	  <?php } ?>
   	    <?php include 'snippets/page-post-title.php'; ?>
        <?php include('snippets/page-post-style.php'); ?>
      	<?php if (is_page('Search')) {
      	   get_search_form();
      	} else {
        	include('layout.php');
      	} ?>
      	
      	<?php $postid = get_the_id(); ?>
      	
        <?php comments_template(); ?>
      
      <?php } else { ?>
        <?php include('snippets/page-post-style.php'); ?>
        <div id="dimmed-page" class="vcenter hcenter">
          <p class="large lb-0 align-center pr0">Inactive</p>
        </div>
      <?php } ?>
      
      <?php 
      /*** Next & Prev Navigation ***/
      if ($post_next_previous_links !== 'Off') { ?>
        <div id="nextprev" class="module <?php if ($post_next_previous_links == 'Fixed') {echo 'fixxed';} ?> mpt-lb-0 mpb-lb-2 nav-module col col-100">
        
          <?php
          
          $inactivecat = get_cat_ID('Inactive');
          if ($inactivecat) {
            $inactivearray = array();
            $args = 'orderby=date&order=ASC&posts_per_page=100&cat='.$inactivecat.'';
            query_posts($args);
            $iii = 0;
            while ( have_posts() ) : the_post();
              $inactivearray[$iii] = get_the_id();
              $iii++;
            endwhile;
            wp_reset_query();
            $commalist = implode(', ', $inactivearray);
          }
          
          $prev = previous_post_link_plus(array('in_same_cat' => true, 'ex_posts' => $commalist, 'return' => 'href'));
          $next = next_post_link_plus(array('in_same_cat' => true, 'ex_posts' => $commalist, 'return' => 'href'));
          
          if ($post_next_previous_links == 'Arrows') {
            if ($next == true || $prev == true) {include('snippets/separator-tight.php');}
            if ($next) {
              echo '<div class="col col-25"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 icons next key-next" href="'.$next.'">H</a>';
              echo '</div></div>';
            }
            if ($prev) {
              echo '<div class="col col-25 right align-right"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 icons prev key-prev" href="'.$prev.'">I</a>';
              echo '</div></div>';
            }
          } else if ($post_next_previous_links == 'Arrows & NextPrev') {
            if ($next == true || $prev == true) {include('snippets/separator-tight.php');}
            if ($next) {
              echo '<div class="col col-25"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 next key-next" href="'.$next.'"><span class="icons">H</span> '.$copy_4.'</a>';
              echo '</div></div>';
            }
            if ($prev) {
              echo '<div class="col col-25 right align-right"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 prev key-prev" href="'.$prev.'">'.$copy_3.' <span class="icons">I</span></a>';
              echo '</div></div>';
            }
          } else if ($post_next_previous_links == 'Titles') {
            if ($next == true || $prev == true) {include('snippets/separator-tight.php');}
            $prevtitle = previous_post_link_plus(array('in_same_cat' => true, 'ex_posts' => $commalist, 'return' => 'title'));
            $nexttitle = next_post_link_plus(array('in_same_cat' => true, 'ex_posts' => $commalist, 'return' => 'title'));
            if ($next) {
              echo '<div class="col col-25"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 next key-next" href="'.$next.'"><span class="icons">H</span> '.$nexttitle.'</a>';
              echo '</div></div>';
            }
            if ($prev) {
              echo '<div class="col col-25 right align-right"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 prev key-prev" href="'.$prev.'">'.$prevtitle.' <span class="icons">I</span></a>';
              echo '</div></div>';
            }
          } else if ($post_next_previous_links == 'Triangles') {
            if ($next == true || $prev == true) {include('snippets/separator-tight.php');}
            if ($next) {
              echo '<div class="col col-25"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 next key-next" href="'.$next.'">&#9664;</a>';
              echo '</div></div>';
            }
            if ($prev) {
              echo '<div class="col col-25 right align-right"><div class="col-inner-hori">';
              echo '<a class="history default lb-0 prev key-prev" href="'.$prev.'">&#9654;</a>';
              echo '</div></div>';
            }
          } else if ($post_next_previous_links == 'Fixed') {
            if ($next) {
              echo '<a class="history default lb-0 next-fixed key-next icons vcenter" href="'.$next.'">X</a>';
            }
            if ($prev) {
              echo '<a class="history default lb-0 prev-fixed key-prev icons vcenter" href="'.$prev.'">Y</a>';
            }
          }
          
          ?>
        </div>
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
                echo '<div class="col col-100"><div class="col-inner-hori"><p>Sorry, no posts matched your criteria.</p></div></div>';
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
          <p>Sorry, no posts matched your criteria.</p>
        </div>
      </div>
   	<?php endif; ?>

	</div>

<?php include('footer.php'); ?>