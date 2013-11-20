<?php 

if (get_field("page_template") == 'Custom') {

  // Grab color values (if turned on)
  $grab_site_background_color = get_field("site_background_color");
  $grab_text_color = get_field("text_color");
  $grab_link_color = get_field("link_color");
  $grab_link_marked_color = get_field("link_marked_color");
  $grab_borders_color = get_field("borders_color");
  $grab_header_background_color = get_field("header_background_color");
  $grab_menu_background_color = get_field("menu_background_color");
  $grab_loader_color = get_field("loader_color");
  $grab_media_loader_bg_color = get_field("media_loader_bg_color");
  $grab_thumbnail_text_color = get_field("thumbnail_text_color");
  $grab_thumbnail_hover_text_color = get_field("thumbnail_hover_text_color");
  $grab_row_item_hover_background_color = get_field("row_item_hover_background_color");
  $grab_row_item_hover_text_color = get_field("row_item_hover_text_color");
  $grab_index_item_dimmed_color = get_field("index_item_dimmed_color");
  $grab_index_item_active_color = get_field("index_item_active_color");
  $grab_forms_border_color = get_field("forms_border_color");
  $grab_forms_focus_border_color = get_field("forms_focus_border_color");
  $grab_forms_background_color = get_field("forms_background_color");
  $grab_forms_text_color = get_field("forms_text_color");
  $grab_button_background_color = get_field("button_background_color");
  $grab_button_text_color = get_field("button_text_color");
  $grab_button_hover_background_color = get_field("button_hover_background_color");
  $grab_button_hover_text_color = get_field("button_hover_text_color");
  // Apply them
  include('style-apply.php');
  include('bg-tiled.php');

} else if (get_field("page_template") == 'Inherit Category') {

  $term_obj = get_field("inherit_template");
  $term_id = $term_obj->term_id;
  $taxonomy = $term_obj->taxonomy;
  
  // Layout
  $layout_style = get_field('layout_mode', $taxonomy . '_' . $term_id);
  $display_footer = get_field('display_footer', $taxonomy . '_' . $term_id);
  $override_grid_gutter = get_field('grid_gutter', $taxonomy . '_' . $term_id);
  // Override state
  $state = false;
  if ($override_grid_gutter) {
    $state = true;
  }
  // Sanitize
  $override_grid_gutter = str_replace('px', '', $override_grid_gutter);
  // Diffs
  $grid_diff_horizontal = $grid_gutter - $override_grid_gutter;
  
  // Colors
  $colorswitch = get_field('color_switch', $taxonomy . '_' . $term_id);

  if ($colorswitch == true) {
    
    // Grab color values (if turned on)
    $grab_site_background_color = get_field('site_background_color', $taxonomy . '_' . $term_id);
    $grab_text_color = get_field('text_color', $taxonomy . '_' . $term_id);
    $grab_link_color = get_field('link_color', $taxonomy . '_' . $term_id);
    $grab_link_marked_color = get_field('link_marked_color', $taxonomy . '_' . $term_id);
    $grab_borders_color = get_field('borders_color', $taxonomy . '_' . $term_id);
    $grab_header_background_color = get_field('header_background_color', $taxonomy . '_' . $term_id);
    $grab_menu_background_color = get_field('menu_background_color', $taxonomy . '_' . $term_id);
    $grab_loader_color = get_field('loader_color', $taxonomy . '_' . $term_id);
    $grab_media_loader_bg_color = get_field('media_loader_bg_color', $taxonomy . '_' . $term_id);
    $grab_thumbnail_text_color = get_field('thumbnail_text_color', $taxonomy . '_' . $term_id);
    $grab_thumbnail_hover_text_color = get_field('thumbnail_hover_text_color', $taxonomy . '_' . $term_id);
    $grab_row_item_hover_background_color = get_field('row_item_hover_background_color', $taxonomy . '_' . $term_id);
    $grab_row_item_hover_text_color = get_field('row_item_hover_text_color', $taxonomy . '_' . $term_id);
    $grab_index_item_dimmed_color = get_field('index_item_dimmed_color', $taxonomy . '_' . $term_id);
    $grab_index_item_active_color = get_field('index_item_active_color', $taxonomy . '_' . $term_id);
    $grab_forms_border_color = get_field('forms_border_color', $taxonomy . '_' . $term_id);
    $grab_forms_focus_border_color = get_field('forms_focus_border_color', $taxonomy . '_' . $term_id);
    $grab_forms_background_color = get_field('forms_background_color', $taxonomy . '_' . $term_id);
    $grab_forms_text_color = get_field('forms_text_color', $taxonomy . '_' . $term_id);
    $grab_button_background_color = get_field('button_background_color', $taxonomy . '_' . $term_id);
    $grab_button_text_color = get_field('button_text_color', $taxonomy . '_' . $term_id);
    $grab_button_hover_background_color = get_field('button_hover_background_color', $taxonomy . '_' . $term_id);
    $grab_button_hover_text_color = get_field('button_hover_text_color', $taxonomy . '_' . $term_id);
    // Apply them
    include('style-apply.php');
    include('bg-tiled-archive.php'); 
  }
  
} ?>