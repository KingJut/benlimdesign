      <?php if (in_category('Inactive')) { ?>

        <div class="col col-50 dimmed">
          <div class="col-inner-hori">

            <span>
              <?php
              if (is_tag()) {
                
                $posttags = get_the_tags();
                if ($posttags) {
                  $tagstrings = array();
                  foreach($posttags as $tag) {
                    $count = ' (' . $tag->count . ')';
                    if (! $index_item_taxonomy_count) {
                      $count = '';
                    }
                    $tagstrings[] = '<a href="' . get_tag_link($tag->term_id) . '" class="history tag-link-' . $tag->term_id . '">' . $tag->name . '</a>'.$count.'';
                  }
                  echo implode(', ', $tagstrings);
                }
                
              } else {
                $category = get_category(get_query_var('cat'));
                $cat_id = $category->cat_ID;
              
                $categories = get_the_category();
                $before = '';
                $separator = ', ';
                $output = '';
                $count = ' (' . $category->count . ')';
                
                if (! $index_item_taxonomy_count) {
                  $count = '';
                }
                
                if($categories){
                	foreach($categories as $category) {
                	
                	if (!($category->cat_name=='Inactive')) {
                	
                	  if($category->parent != 0) {
                	    if ($category->cat_ID == $cat_id) {
                	      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    } else {
                	      if ($index_item_taxonomy_display_alts == 'Sub Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    }
              		  
              		  } else {
              		    $b = ' ';
              		    if ($category->cat_ID == $cat_id) {
              		      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    } else {
              		      if ($index_item_taxonomy_display_alts == 'Sub Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    }
              		  }
              		  
              		}
              		  
                	}
                	echo rtrim($output, $separator);
                } else {
                  echo 'Page';
                }
              
              }
              ?>
            </span>

          </div>
        </div>
        
        <div class="col col-50 dimmed">
          <div class="col-inner-hori">
            <h2 class="<?php echo $index_text_size; ?>">
              <?php the_title(); ?>
            </h2>
          </div>
        </div>
        
      <?php } else if ($wp_query->post->ID == $postid || $wp_query->post->ID == $this_page_id) { ?>
      
        <div class="col col-50 <?php if ($pagetype == 'page' || $pagetype == 'single') {echo 'active';} ?>">
          <div class="col-inner-hori">

            <span>
              <?php
              if (is_tag()) {
                
                $posttags = get_the_tags();
                if ($posttags) {
                  $tagstrings = array();
                  foreach($posttags as $tag) {
                    $count = ' (' . $tag->count . ')';
                    if (! $index_item_taxonomy_count) {
                      $count = '';
                    }
                    $tagstrings[] = '<a href="' . get_tag_link($tag->term_id) . '" class="history tag-link-' . $tag->term_id . '">' . $tag->name . '</a>'.$count.'';
                  }
                  echo implode(', ', $tagstrings);
                }
                
              } else {
                $category = get_category(get_query_var('cat'));
                $cat_id = $category->cat_ID;
              
                $categories = get_the_category();
                $before = '';
                $separator = ', ';
                $output = '';
                $count = ' (' . $category->count . ')';
                
                if (! $index_item_taxonomy_count) {
                  $count = '';
                }
                
                if($categories){
                	foreach($categories as $category) {
                	
                	if (!($category->cat_name=='Inactive')) {
                	
                	  if($category->parent != 0) {
                	    if ($category->cat_ID == $cat_id) {
                	      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    } else {
                	      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    }
              		  
              		  } else {
              		    $b = ' ';
              		    if ($category->cat_ID == $cat_id) {
              		      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    } else {
              		      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    }
              		  }
              		  
              		}
              		  
                	}
                	echo rtrim($output, $separator);
                } else {
                  echo 'Page';
                }
              
              }
              ?>
            </span>

          </div>
        </div>
        
        <div class="col col-50 <?php if ($pagetype == 'page' || $pagetype == 'single') {echo 'active';} ?>">
          <div class="col-inner-hori">
            <h2 class="<?php echo $index_text_size; ?>">

                <?php if ($pagetype == 'page' || $pagetype == 'single') { ?> 
                  <?php the_title(); ?>
                <?php } else { ?>
                  <a href="<?php the_permalink(); ?>" class="history">
                    <?php the_title(); ?>
                  </a>
                <?php } ?>

            </h2>
          </div>
        </div>
      
      <?php } else { ?>

        <div class="col col-50">
          <div class="col-inner-hori">
            <span>
              <?php
              if (is_tag()) {
              
                $posttags = get_the_tags();
                if ($posttags) {
                  $tagstrings = array();
                  foreach($posttags as $tag) {
                    $count = ' (' . $tag->count . ')';
                    if (! $index_item_taxonomy_count) {
                      $count = '';
                    }
                    $tagstrings[] = '<a href="' . get_tag_link($tag->term_id) . '" class="history tag-link-' . $tag->term_id . '">' . $tag->name . '</a>'.$count.'';
                  }
                  echo implode(', ', $tagstrings);
                }
                
              } else {
                $category = get_category(get_query_var('cat'));
                $cat_id = $category->cat_ID;
              
                $categories = get_the_category();
                $before = '';
                $separator = ', ';
                $output = '';
                $count = ' (' . $category->count . ')';
                if (! $index_item_taxonomy_count) {
                  $count = '';
                }
                if($categories){
                	foreach($categories as $category) {
                	
                	if (!($category->cat_name=='Inactive')) {
                	
                	  if($category->parent != 0) {
                	    if ($category->cat_ID == $cat_id) {
                	      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    } else {
                	      if ($index_item_taxonomy_display_alts == 'Sub Categories' || $index_item_taxonomy_display_alts == 'Both') {
                	        $output .= $before . '<a href="'.get_category_link( $category->term_id ).'" class="history">'.$category->cat_name.'</a>'.$count.$separator;
                        }
                	    }
              		  
              		  } else {
              		    $b = ' ';
              		    if ($category->cat_ID == $cat_id) {
              		      if ($index_item_taxonomy_display_alts == 'Parent Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="marked history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    } else {
              		      if ($index_item_taxonomy_display_alts == 'Sub Categories' || $index_item_taxonomy_display_alts == 'Both') {
              		        $output .= $b . '<a href="'.get_category_link( $category->term_id ).'" class="history">'.$category->cat_name.'</a>'.$count.$separator;
              		      }
              		    }
              		  }
              		  
              		}
              		  
                	}
                	echo rtrim($output, $separator);
                } else {
                  echo 'Page';
                }
              
              }
              ?>
            </span>
            
          </div>
        </div>
        <div class="col col-50">
          <div class="col-inner-hori">
            <h2 class="<?php echo $index_text_size; ?>">
              <a href="<?php the_permalink(); ?>" class="history">
                <?php the_title(); ?>
              </a>
            </h2>
          </div>
        </div>
      
      <?php } ?>
