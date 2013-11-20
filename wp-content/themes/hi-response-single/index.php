<?php include('header.php'); ?>

	<div id="content">
	  
	  <?php include('snippets/bg-frontpage.php'); ?>
	  <div id="block" <?php 
	  if ($detect->isMobile()) {if($detect->isTablet()){
  	  /* Tab */
  	  if (get_field("frontpage_override_header_position", "options") && get_field("frontpage_tablet_header_position", "options")) {echo 'data-header-position="'.get_field("frontpage_tablet_header_position", "options").'"';} else {echo 'data-header-position="'.$tablet_header_position.'"';};
    } else {
      /* Mob */ }
      if (get_field("frontpage_override_header_position", "options") && get_field("frontpage_mobile_header_position", "options")) {echo 'data-header-position="'.get_field("frontpage_mobile_header_position", "options").'"';} else {echo 'data-header-position="'.$mobile_header_position.'"';};
    } else {
      /* Desc */
      if (get_field("frontpage_override_header_position", "options") && get_field("frontpage_header_position", "options")) {echo 'data-header-position="'.get_field("frontpage_header_position", "options").'"';} else {echo 'data-header-position="'.$header_position.'"';};
    } 
    ?>>&nbsp;</div>
    
    <?php include 'snippets/secondary-menu.php'; ?>
	  <?php include 'snippets/section-menu.php'; ?>
    
    <?php 
    // CSS
    include('snippets/frontpage-style.php');
    // Layout
    include('layout-index.php'); 
    ?>

	</div>

<?php include('footer.php'); ?>