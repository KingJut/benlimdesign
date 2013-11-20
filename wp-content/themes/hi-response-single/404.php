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
          <?php echo $copy_25; ?>
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