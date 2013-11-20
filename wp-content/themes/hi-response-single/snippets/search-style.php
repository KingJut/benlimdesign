<?php 

if (get_field("search_color_switch", "option")) {
  // Grab color values (if turned on)
  $grab_site_background_color = get_field("search_site_background_color", "option");
  $grab_text_color = get_field("search_text_color", "option");
  $grab_link_color = get_field("search_link_color", "option");
  $grab_link_marked_color = get_field("search_link_marked_color", "option");
  $grab_borders_color = get_field("search_borders_color", "option");
  $grab_header_background_color = get_field("search_header_background_color", "option");
  $grab_menu_background_color = get_field("search_menu_background_color", "option");
  $grab_loader_color = get_field("search_loader_color", "option");
  $grab_media_loader_bg_color = get_field("search_media_loader_bg_color", "option");
  $grab_thumbnail_text_color = get_field("search_thumbnail_text_color", "option");
  $grab_thumbnail_hover_text_color = get_field("search_thumbnail_hover_text_color", "option");
  $grab_row_item_hover_background_color = get_field("search_row_item_hover_background_color", "option");
  $grab_row_item_hover_text_color = get_field("search_row_item_hover_text_color", "option");
  $grab_index_item_dimmed_color = get_field("search_index_item_dimmed_color", "option");
  $grab_index_item_active_color = get_field("search_index_item_active_color", "option");
  $grab_forms_border_color = get_field("search_forms_border_color", "option");
  $grab_forms_focus_border_color = get_field("search_forms_focus_border_color", "option");
  $grab_forms_background_color = get_field("search_forms_background_color", "option");
  $grab_forms_text_color = get_field("search_forms_text_color", "option");
  $grab_button_background_color = get_field("search_button_background_color", "option");
  $grab_button_text_color = get_field("search_button_text_color", "option");
  $grab_button_hover_background_color = get_field("search_button_hover_background_color", "option");
  $grab_button_hover_text_color = get_field("search_button_hover_text_color", "option");
  // Apply them
  include('style-apply.php');
}

include('bg-tiled.php'); 

?>