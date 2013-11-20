<?php include('header.php'); ?>

	<div id="content">
	  
	  <div id="block" <?php 
  	$term_id = get_queried_object()->term_id;
	  if ($detect->isMobile()) {if($detect->isTablet()){
  	  /* Tab */
  	  if ($tablet_header_position) {echo 'data-header-position="'.$tablet_header_position.'"';}
    } else {
      /* Mob */ }
      if ($mobile_header_position) {echo 'data-header-position="'.$mobile_header_position.'"';}
    } else {
      /* Desc */
      if ($header_position) {echo 'data-header-position="'.$header_position.'"';}
    } 
    ?>>&nbsp;</div>
	  
   	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    	
    <div class="module">
    	<div class="col col-100">
        <div class="col-inner">

          <div class="entry-content">
              <div class="entry-attachment">
<?php if ( wp_attachment_is_image( $post->id ) ) : $att_image = wp_get_attachment_image_src( $post->id, "medium"); ?>
              <p class="attachment"><a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>" rel="attachment"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>"  class="attachment-medium" alt="<?php $post->post_excerpt; ?>" /></a>
              </p>
<?php else : ?>
              <a href="<?php echo wp_get_attachment_url($post->ID) ?>" title="<?php echo wp_specialchars( get_the_title($post->ID), 1 ) ?>" rel="attachment"><?php echo basename($post->guid) ?></a>
<?php endif; ?>
              </div>
              <div class="entry-caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt() ?></div>

<?php the_content( __( 'Continue reading <span class="meta-nav">&amp;raquo;</span>', 'your-theme' )  ); ?>
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&amp;after=</div>') ?>
          </div>

        </div>
    	</div>
    </div>

  	<?php endwhile; else: ?>

    <div class="module">
    	<div class="col col-100">
        <div class="col-inner">
          <?php echo $copy_25; ?>
        </div>
    	</div>
    </div>

   	<?php endif; ?>
 		
	</div>

<?php include('footer.php'); ?>