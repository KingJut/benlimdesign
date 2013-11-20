<?php include('header.php'); ?>

	<div id="content">
	  <?php include 'snippets/secondary-menu.php'; ?>
	  <?php include 'snippets/section-menu.php'; ?>
	  
	  <?php include('snippets/bg-search.php'); ?>
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
    
    <?php 
    // CSS
    include('snippets/search-style.php');
    // Form
    get_search_form();
    ?>
    
    <?php
    // Number of hits
    $mySearch =& new WP_Query("s=$s & showposts=-1");
    $NumResults = $mySearch->post_count;
    // Search word
    echo "<div class='module'><div class='col col-50'><div class='col-inner-hori'><p class='default lb-2'>". $NumResults ." ".$copy_24."<br/><span class='underline'>'";
    the_search_query();
    echo "'</p></span></div></div></div>";
    // Result
    include('layout-search.php'); 
    ?>

	</div>

<?php include('footer.php'); ?>