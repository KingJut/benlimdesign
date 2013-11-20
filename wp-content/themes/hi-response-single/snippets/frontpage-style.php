<?php 

if (get_field("frontpage_color_switch", "option")) {
  // Grab color values (if turned on)
  $grab_site_background_color = get_field("frontpage_site_background_color", "option");
  $grab_text_color = get_field("frontpage_text_color", "option");
  $grab_link_color = get_field("frontpage_link_color", "option");
  $grab_link_marked_color = get_field("frontpage_link_marked_color", "option");
  $grab_borders_color = get_field("frontpage_borders_color", "option");
  $grab_header_background_color = get_field("frontpage_header_background_color", "option");
  $grab_menu_background_color = get_field("frontpage_menu_background_color", "option");
  $grab_loader_color = get_field("frontpage_loader_color", "option");
  $grab_media_loader_bg_color = get_field("frontpage_media_loader_bg_color", "option");
  $grab_thumbnail_text_color = get_field("frontpage_thumbnail_text_color", "option");
  $grab_thumbnail_hover_text_color = get_field("frontpage_thumbnail_hover_text_color", "option");
  $grab_row_item_hover_background_color = get_field("frontpage_row_item_hover_background_color", "option");
  $grab_row_item_hover_text_color = get_field("frontpage_row_item_hover_text_color", "option");
  $grab_index_item_dimmed_color = get_field("frontpage_index_item_dimmed_color", "option");
  $grab_index_item_active_color = get_field("frontpage_index_item_active_color", "option");
  $grab_forms_border_color = get_field("frontpage_forms_border_color", "option");
  $grab_forms_focus_border_color = get_field("frontpage_forms_focus_border_color", "option");
  $grab_forms_background_color = get_field("frontpage_forms_background_color", "option");
  $grab_forms_text_color = get_field("frontpage_forms_text_color", "option");
  $grab_button_background_color = get_field("frontpage_button_background_color", "option");
  $grab_button_text_color = get_field("frontpage_button_text_color", "option");
  $grab_button_hover_background_color = get_field("frontpage_button_hover_background_color", "option");
  $grab_button_hover_text_color = get_field("frontpage_button_hover_text_color", "option");
  // Apply them
  include('style-apply.php');
}

include('bg-tiled.php'); 

?>