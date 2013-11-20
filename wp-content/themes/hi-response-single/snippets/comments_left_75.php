  	<div class="col col-75">
    	<div class="col-inner-hori">

    	<?php if (get_comments_number() == 0) { ?>
    	 <p class="<?php echo get_field('comments_text_size_1', 'option'); ?> lb-1"><?php if (get_field('copy_9', 'option')) {echo get_field('copy_9', 'option');} ?></p>
    	<?php } ?>

  		<ol class="commentlist">
  			<?php wp_list_comments( array( 'callback' => 'twentytwelve_comment', 'style' => 'ol' ) ); ?>
  		</ol><!-- .commentlist -->
  
  		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
  		<nav id="comment-nav-below" class="navigation" role="navigation">
  			<h1 class="assistive-text section-heading"><?php _e( 'Comment navigation', 'twentytwelve' ); ?></h1>
  			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'twentytwelve' ) ); ?></div>
  			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentytwelve' ) ); ?></div>
  		</nav>
  		<?php endif; // check for comment navigation ?>
  
  		<?php
  		/* If there are no comments and comments are closed, let's leave a note.
  		 * But we only want the note on posts and pages that had comments in the first place.
  		 */
  		if ( ! comments_open() && get_comments_number() ) : ?>
  		<p class="nocomments"><?php if (get_field('copy_14', 'option')) {echo get_field('copy_14', 'option');} ?></p>
		<?php endif; ?>
		
    	</div>
  	</div>
  	
  	<div class="col col-25">
    	<div class="col-inner-hori">
    	 <h2 class="lb-1 <?php echo get_field('comments_text_size_1', 'option'); ?> align-right"><?php if (get_field('copy_7', 'option')) {echo get_field('copy_7', 'option');} ?></h2>
    	</div>
    </div>
  	
  	<?php include('separator.php'); ?>
  	
  	<div class="col col-75">
    	<div class="col-inner-hori">

      	<?php 

        $fields =  array(
        	'author' => '<p class="comment-form-author"><input id="author" placeholder="'.get_field('copy_18', 'option').'' . ( $req ? '*' : '' ) . '" class="render" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' /></p>',
        	'email' => '<p class="comment-form-email"><input id="email" placeholder="'.get_field('copy_19', 'option').'' . ( $req ? '*' : '' ) . '" class="render" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' /></p>',
        	'url' => '<p class="comment-form-url"><input id="url" placeholder="'.get_field('copy_20', 'option').'" class="render" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '"  /></p>'
        );
      	
        $args = array(
        	'fields'               => apply_filters('comment_form_default_fields', $fields ),
        	'comment_field'        => '<p class="comment-form-comment"><textarea id="comment" placeholder="'. get_field('copy_21', 'option') .'" name="comment" rows="6" aria-required="true"></textarea></p>',
        	'must_log_in'          => '<p class="must-log-in lb-1 '.get_field('comments_text_size_2', 'option').'">'. get_field('copy_15', 'option') .'',
        	'logged_in_as'         => '<p class="logged-in lb-1 '.get_field('comments_text_size_2', 'option').'">'. get_field('copy_11', 'option') .'',
        	'comment_notes_before' => '',
        	'comment_notes_after'  => '<p class="form-allowed-tags lb-2 '.get_field('comments_text_size_2', 'option').'">'. get_field('copy_12', 'option') .'</p>',
        	'id_form'              => 'commentform',
        	'id_submit'            => 'submit',
        	'title_reply'          => __('<p class="reply lb-0-5 '.get_field('comments_text_size_1', 'option').'">'. get_field('copy_10', 'option') .'' ),
        	//'title_reply'          => '',
        	'title_reply_to'       => __(''. get_field('copy_6', 'option') .' %s' ),
        	'cancel_reply_link'    => __(''. get_field('copy_17', 'option') .'' ),
        	'label_submit'         => __(''. get_field('copy_13', 'option') .'' ),
        );
      	
      	comment_form($args); 
      	
      	?>

      	</div>
    </div>
    
  	<div class="col col-25">
    	<div class="col-inner-hori">
    	 <h2 class="lb-1 <?php echo get_field('comments_text_size_1', 'option'); ?> align-right"><?php if (get_field('copy_8', 'option')) {echo get_field('copy_8', 'option');} ?></h2>
    	</div>
    </div>