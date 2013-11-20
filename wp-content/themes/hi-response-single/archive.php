<?php include('header.php'); ?>

	<div id="content">
	  
	  <div id="block" <?php 
  	
    $queried_object = get_queried_object(); 
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;  
  	
	  if ($detect->isMobile()) {if($detect->isTablet()){
  	  /* Tab */
  	  if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('tabletheader_position', $taxonomy . '_' . $term_id)) {echo 'data-header-position="'.get_field('tablet_header_position', $taxonomy . '_' . $term_id).'"';} else {echo 'data-header-position="'.$tablet_header_position.'"';}
    } else {
      /* Mob */ }
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('mobile_header_position', $taxonomy . '_' . $term_id)) {echo 'data-header-position="'.get_field('mobile_header_position', $taxonomy . '_' . $term_id).'"';} else {echo 'data-header-position="'.$mobile_header_position.'"';}
    } else {
      /* Desc */
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('header_position', $taxonomy . '_' . $term_id)) {echo 'data-header-position="'.get_field('header_position', $taxonomy . '_' . $term_id).'"';} else {echo 'data-header-position="'.$header_position.'"';}
    } 
    ?>>&nbsp;</div>
  
	  <?php include 'snippets/secondary-menu.php'; ?>
	  <?php include 'snippets/section-menu.php'; ?>
    
    <?php include('layout-archive.php'); ?>

	</div>

<?php include('footer.php'); ?>