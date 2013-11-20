<div id="toggle">
<?php 

// Set Page Template logic

if (is_search() || is_page('Search')) {

    if ($detect->isMobile()) {if($detect->isTablet()){
      /* Tab */
  	  if (get_field('search_override_header_position', 'option') && get_field('search_tablet_header_position', 'option')) {
    	  $th_pos = get_field('search_tablet_header_position', 'option');
  	  } else {
    	  $th_pos = $tablet_header_position;
      }
    } else {
      /* Mob */ }
      if (get_field('search_override_header_position', 'option') && get_field('search_mobile_header_position', 'option')) {
        $mh_pos = get_field('search_mobile_header_position', 'option');
      } else {
        $mh_pos = $mobile_header_position;
      }
    } else {
      /* Desc */
      if (get_field('search_override_header_position', 'option') && get_field('search_header_position', 'option')) {
        $h_pos = get_field('search_header_position', 'option');
      } else {
        $h_pos = $header_position;
      }
    }

} else if (is_home()) {

    if ($detect->isMobile()) {if($detect->isTablet()){
      /* Tab */
  	  if (get_field('frontpage_override_header_position', 'option') && get_field('frontpage_tablet_header_position', 'option')) {
    	  $th_pos = get_field('frontpage_tablet_header_position', 'option');
  	  } else {
    	  $th_pos = $tablet_header_position;
      }
    } else {
      /* Mob */ }
      if (get_field('frontpage_override_header_position', 'option') && get_field('frontpage_mobile_header_position', 'option')) {
        $mh_pos = get_field('frontpage_mobile_header_position', 'option');
      } else {
        $mh_pos = $mobile_header_position;
      }
    } else {
      /* Desc */
      if (get_field('frontpage_override_header_position', 'option') && get_field('frontpage_header_position', 'option')) {
        $h_pos = get_field('frontpage_header_position', 'option');
      } else {
        $h_pos = $header_position;
      }
    }

} else if (is_archive()) {

    $queried_object = get_queried_object(); 
    $taxonomy = $queried_object->taxonomy;
    $term_id = $queried_object->term_id;  
 
    if ($detect->isMobile()) {if($detect->isTablet()){
      /* Tab */
  	  if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('tablet_header_position', $taxonomy . '_' . $term_id)) {
    	  $th_pos = get_field('tablet_header_position', $taxonomy . '_' . $term_id);
  	  } else {
    	  $th_pos = $tablet_header_position;
      }
    } else {
      /* Mob */ }
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('mobile_header_position', $taxonomy . '_' . $term_id)) {
        $mh_pos = get_field('mobile_header_position', $taxonomy . '_' . $term_id);
      } else {
        $mh_pos = $mobile_header_position;
      }
    } else {
      /* Desc */
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('header_position', $taxonomy . '_' . $term_id)) {
        $h_pos = get_field('header_position', $taxonomy . '_' . $term_id);
      } else {
        $h_pos = $header_position;
      }
    }

} else {

  if (get_field("page_template") == 'Inherit Category') {
  
    $term_obj = get_field("inherit_template");
    $term_id = $term_obj->term_id;
    $taxonomy = $term_obj->taxonomy;

    if ($detect->isMobile()) {if($detect->isTablet()){
      /* Tab */
  	  if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('tablet_header_position', $taxonomy . '_' . $term_id)) {
    	  $th_pos = get_field('tablet_header_position', $taxonomy . '_' . $term_id);
  	  } else {
    	  $th_pos = $tablet_header_position;
      }
    } else {
      /* Mob */ }
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('mobile_header_position', $taxonomy . '_' . $term_id)) {
        $mh_pos = get_field('mobile_header_position', $taxonomy . '_' . $term_id);
      } else {
        $mh_pos = $mobile_header_position;
      }
    } else {
      /* Desc */
      if (get_field('override_header_position', $taxonomy . '_' . $term_id) && get_field('header_position', $taxonomy . '_' . $term_id)) {
        $h_pos = get_field('header_position', $taxonomy . '_' . $term_id);
      } else {
        $h_pos = $header_position;
      }
    }

  } else if (get_field("page_template") == 'Custom') {
  
    if (get_field("override_header_position")) {
      $h_pos = get_field("header_position");
      $mh_pos = get_field("mobile_header_position");
      $th_pos = get_field("tablet_header_position");
    } else {
      $h_pos = $header_position;
      $mh_pos = $mobile_header_position;
      $th_pos = $tablet_header_position;
    }
    
  } else {
    
    $h_pos = $header_position;
    $mh_pos = $mobile_header_position;
    $th_pos = $tablet_header_position;
    
  }
}

?>


<?php if (!$detect->isMobile() && $h_pos == 'fixed') { ?>
<div id="toggle-menu">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">
    
    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } else if ($detect->isMobile() && $mh_pos == 'fixed') { ?>
<div id="toggle-menu">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">

    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } else if ($detect->isTablet() && $th_pos == 'fixed') { ?>
<div id="toggle-menu">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">
  
    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } else if (!$detect->isMobile() && $h_pos == 'static') { ?>
<div id="toggle-menu" class="static">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">

    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } else if ($detect->isMobile() && $mh_pos == 'static') { ?>
<div id="toggle-menu" class="static">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">

    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } else if ($detect->isTablet() && $th_pos == 'static') { ?>
<div id="toggle-menu" class="static">
  <div id="toggle-menu-inner" class="module mpt-<?php echo get_field('toggle_menu_margin_top','options'); ?> mpb-<?php echo get_field('toggle_menu_margin_bottom','options'); ?> <?php echo $toggle_menu_text_size; ?>">

    <?php if(get_field('toggle_menu_render_type', 'option') == 'Menu top line') { include('separator-toggle-menu.php'); } ?>

    <?php
      $separator = '';
      $before = '';
      $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'special', 'menu_class' => 'special', 'before' => '', 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); 
      $menu = str_replace('<a',"<a class='history ".$toggle_menu_text_size."'",$menu);
      echo $menu;
    ?>
  </div>
</div>
<?php } ?>
</div>