
  </div><!-- #change Close -->

  <?php 
  // Hide/Show footer logic
  if (is_search() || is_page('Search')) {
    if ($search_display_footer) {
      include('snippets/footer-columns.php');
    } else {
      echo '<div id="footer"></div>';
    }
  } else if (is_home()) {
    if ($frontpage_display_footer) {
      include('snippets/footer-columns.php');
    } else {
      echo '<div id="footer"></div>';
    }
  } else if (is_category()) {
    if (get_field('display_footer', $taxonomy . '_' . $term_id)) {
      include('snippets/footer-columns.php');
    } else {
      echo '<div id="footer"></div>';
    }
  } else if (is_tag()) {
    if ($display_footer) {
      include('snippets/footer-columns.php');
    } else {
      echo '<div id="footer"></div>';
    }
  } else {
    if (get_field("page_template") == 'Inherit Category') {
      $display_footer = get_field('display_footer', $taxonomy . '_' . $term_id);
      if ($display_footer) {
        include('snippets/footer-columns.php');
      } else {
        echo '<div id="footer"></div>';
      }
    } else if (get_field("page_template") == 'Custom') {      
      if (get_field("display_footer")) {
        include('snippets/footer-columns.php');
      } else {
        echo '<div id="footer"></div>';
      }
    } else {
      include('snippets/footer-columns.php');
    }
  } ?>
  
</div><!-- #wrap Close -->

<?php wp_footer(); ?>

<!-- jQuery the Faery -->
<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.2.min.js"><\/script>')</script>
<!--[if !IE]> -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.history.js"></script>
<!-- <![endif]-->
<!--[if gte IE 8]>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.history.js"></script>
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/css3-mediaqueries.js"></script>
<![endif]-->
<script>
  // Setting variables (so they are available to ui.min.js)
    // Layout
  var toggle_menu_speed = <?php echo $toggle_menu_speed; ?>;
  var taxonomy_pagination_type = '<?php echo $taxonomy_pagination_type; ?>';
  var max_site_width = <?php echo $max_site_width; ?>;
  var site_left_right_border_margin = <?php echo $site_left_right_border_margin; ?>;
  var site_margin_left = '<?php echo $site_margin_left; ?>';
  var site_margin_right = '<?php echo $site_margin_right; ?>';
  var link_decoration = '<?php echo $link_decoration; ?>';
    // History
  var history_state = <?php if ($history_state) { echo $history_state; } else {echo 0;} ?>;
  <?php if ($history_state) { ?>
  var history_transition_speed = <?php echo $history_transition_speed; ?>;
  var history_transition_delay = <?php echo $history_transition_delay; ?>;
  var history_color_transition_speed = <?php echo $history_color_transition_speed; ?>;
  var history_cache = '<?php if ($history_cache) {echo $history_cache;} ?>';
  var page_loader = '<?php if ($page_loader) {echo $page_loader;} else {echo 'None';} ?>';
  <?php if ($page_loader == 'Type-5') { ?>
  var page_loader_text = '<?php echo $page_loader_text; ?>';
  var page_loader_text_size = '<?php echo $page_loader_text_size; ?>';
  <?php } ?>
  <?php } ?>
    // Interface
  var masonry_library = '<?php echo $masonry_library; ?>';
  var mobile_toggle_menu_speed = <?php echo $mobile_toggle_menu_speed; ?>;
  var tablet_toggle_menu_speed = <?php echo $tablet_toggle_menu_speed; ?>;
  var default_easing = '<?php echo $default_easing; ?>';
  var image_loaded_fade_speed = <?php echo $image_loaded_fade_speed; ?>;
  var slideshow_speed = <?php echo $slideshow_speed; ?>;
  var post_next_previous_keys = <?php if ($post_next_previous_keys) { echo $post_next_previous_keys; } else {echo 0;} ?>;
  var focus_mode_margin_top = <?php echo $focus_mode_margin_top; ?>;
  var focus_mode_margin_bottom = <?php echo $focus_mode_margin_bottom; ?>;
    // Copy
  var copy_6 = '<?php if ($copy_6) {echo $copy_6;} else {echo 'Loading...';} ?>';
    // Mobile
  var mobile_thumbnails_force_hover = <?php if ($mobile_thumbnails_force_hover) { echo $mobile_thumbnails_force_hover; } else {echo 0;} ?>;
    // Tablet
  var tablet_thumbnails_force_hover = <?php if ($tablet_thumbnails_force_hover) { echo $tablet_thumbnails_force_hover; } else {echo 0;} ?>;
</script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/plugins.min.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.flexslider-min.js"></script>

<script src="<?php bloginfo('stylesheet_directory'); ?>/js/ui.min.js"></script>
<!-- Insert Google Analytics if set -->
<?php if (get_field('analytics_code_snippet', 'option')) {
  echo get_field('analytics_code_snippet', 'option');
} ?>

</body>
</html>