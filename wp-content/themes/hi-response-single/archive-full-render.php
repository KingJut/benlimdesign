<?php if (in_category('Inactive')) { 
  // If post is 'dimmed'
?>
  
<?php } else { ?>

  	  <?php if (get_field('inactive_state') !== true) { ?>
  	  

<?php include('snippets/separator.php'); ?>
<?php include 'snippets/page-post-stack-title.php'; ?>
<?php  
  
  // Default Modules
  while(has_sub_field("module")):
 
  	if(get_row_layout() == "grid"): 
      if (get_sub_field("grid_layout_type") == 'Float') {
        // layout: Grid Float
        include('snippets/grid-float.php');
      } else {
  	    // layout: Grid Masonry
        include('snippets/grid-masonry.php');
      }
    elseif(get_row_layout() == "row"): 
    	// layout: Row
      include('snippets/row.php');
  	elseif(get_row_layout() == "slideshow"): 
  	  // layout: Slideshow
  	  include('snippets/slideshow.php');
  	elseif(get_row_layout() == "text"): 
      if (get_sub_field("grid_layout_type") == 'Float') {
        // layout: Text Float
        include('snippets/text-float.php');
      } else {
  	    // layout: Text Masonry
        include('snippets/text-masonry.php');
      }
  	elseif(get_row_layout() == "section_separator"): 
  	  // layout: Separator
      include('snippets/separator.php');
  	endif;
 
  endwhile; 

  // Blog Modules
  while(has_sub_field("blog_specific_module")):
 
    $hit = true;
  	if(get_row_layout() == "flex_module"): 
  	  // layout: Masonry
      include('snippets/blog.php');
  	elseif(get_row_layout() == "separator"): 
  	  // layout: Separator
      include('snippets/separator.php');
  	endif;
 
  endwhile;  

  ?>
  
  
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
                <div class="stack <?php if ($stack_margin_top) {echo 'smt-' .$stack_margin_top;} ?> <?php if ($stack_margin_bottom) {echo 'smb-' .$stack_margin_bottom;} ?>">
                  <?php include('layout.php'); ?>
                </div>
              <?php endwhile; else: 
                echo '<p>Sorry, no posts matched your criteria.</p>';
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
            <?php include('snippets/separator-stacked.php'); ?>
            </div>
            
          <?php endif; ?>
          
        <?php endwhile; ?>
      	
      	<?php $postid = get_the_id(); ?>
      
      <?php } else { ?>

      <?php } ?>

<?php } ?>