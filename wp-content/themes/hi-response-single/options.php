<?php 

// BASE
$posts_per_page = get_option('posts_per_page');
$site_title = get_field('site_title', 'option');
$logo_state = get_field('logo_state', 'option');
$logo = get_field('logo', 'option');
$logo_retina = get_field('logo_retina', 'option');
$logo_height = get_field('logo_height', 'option');
$logo_width = get_field('logo_width', 'option');
$footer_column_1_display = get_field('footer_column_1_display', 'option');
$footer_column_1 = get_field('footer_column_1', 'option');
$footer_column_1_width = get_field('footer_column_1_width', 'option');
$footer_column_1_text_align = get_field('footer_column_1_text_align', 'option');
$footer_column_2_display = get_field('footer_column_2_display', 'option');
$footer_column_2 = get_field('footer_column_2', 'option');
$footer_column_2_width = get_field('footer_column_2_width', 'option');
$footer_column_2_text_align = get_field('footer_column_2_text_align', 'option');
$footer_column_3_display = get_field('footer_column_3_display', 'option');
$footer_column_3 = get_field('footer_column_3', 'option');
$footer_column_3_width = get_field('footer_column_3_width', 'option');
$footer_column_3_text_align = get_field('footer_column_3_text_align', 'option');
$footer_column_4_display = get_field('footer_column_4_display', 'option');
$footer_column_4 = get_field('footer_column_4', 'option');
$footer_column_4_width = get_field('footer_column_4_width', 'option');
$footer_column_4_text_align = get_field('footer_column_4_text_align', 'option');

// LAYOUT
$max_site_width = get_field('max_site_width', 'option');
$site_margin_top = get_field('site_margin_top', 'option');
$site_margin_bottom = get_field('site_margin_bottom', 'option');
$site_margin_left = get_field('site_margin_left', 'option');
$site_margin_right = get_field('site_margin_right', 'option');
$site_left_right_border = get_field('site_left_right_border', 'option');
$site_left_right_border_width = get_field('site_left_right_border_width', 'option');
$site_left_right_border_margin = get_field('site_left_right_border_margin', 'option');
$header_position = get_field('header_position', 'option');
$header_background_transparency = get_field('header_background_transparency', 'option');
$header_top_padding = get_field('header_top_padding', 'option');
$header_bottom_padding = get_field('header_bottom_padding', 'option');
$header_bottom_margin = get_field('header_bottom_margin', 'option');
$footer_top_padding = get_field('footer_top_padding', 'option');
$footer_bottom_padding = get_field('footer_bottom_padding', 'option');
$grid_gutter = get_field('grid_gutter', 'option');
$paragraph_inner_right_padding = get_field('paragraph_inner_right_padding', 'option');
$header_separator_height = get_field('header_separator_height', 'option');
$separator_height = get_field('separator_height', 'option');
$separator_height_alt = get_field('separator_height_alt', 'option');
$index_module_type = get_field('index_module_type', 'option');
$index_item_padding_top = get_field('index_item_padding_top', 'option');
$index_item_padding_bottom = get_field('index_item_padding_bottom', 'option');
$index_item_taxonomy_count = get_field('index_item_taxonomy_count', 'option');
$index_item_taxonomy_display_alts = get_field('index_item_taxonomy_display_alts', 'option');
$forms_padding = get_field('forms_padding', 'option');
$forms_margin_bottom = get_field('forms_margin_bottom', 'option');
$forms_border_width = get_field('forms_border_width', 'option');
$link_decoration = get_field('link_decoration', 'option');
$post_next_previous_links = get_field('post_next_previous_links', 'option');
$post_next_previous_keys = get_field('post_next_previous_keys', 'option');

// MENUS
$menu_items_padding_top = get_field('menu_items_padding_top', 'option');
$menu_items_padding_bottom = get_field('menu_items_padding_bottom', 'option');
$main_menu_type = get_field('main_menu_type', 'option');
$main_menu_width = get_field('main_menu_width', 'option');
$main_menu_text_replacer = get_field('main_menu_text_replacer', 'option');
$toggle_menu_margin_top = get_field('toggle_menu_margin_top', 'option');
$toggle_menu_margin_bottom = get_field('toggle_menu_margin_bottom', 'option');
$toggle_menu_render_type = get_field('toggle_menu_render_type', 'option');
$toggle_menu_line_height = get_field('toggle_menu_line_height', 'option');
$secondary_menu_render_type = get_field('secondary_menu_render_type', 'option');
$secondary_menu_line_height = get_field('secondary_menu_line_height', 'option');
$section_menu_render_type = get_field('section_menu_render_type', 'option');
$section_menu_line_height = get_field('section_menu_line_height', 'option');

// TYPOGRAPHY
  // Text definitions
$default_font = get_field('default_font', 'option');
$default_font_size = get_field('default_font_size', 'option');
$default_font_line_height = get_field('default_font_line_height', 'option');
$small_font = get_field('small_font', 'option');
$small_font_size = get_field('small_font_size', 'option');
$small_font_line_height = get_field('small_font_line_height', 'option');
$large_font = get_field('large_font', 'option');
$large_font_size = get_field('large_font_size', 'option');
$large_font_line_height = get_field('large_font_line_height', 'option');
$huge_font = get_field('huge_font', 'option');
$huge_font_size = get_field('huge_font_size', 'option');
$huge_font_line_height = get_field('huge_font_line_height', 'option');
  // Text sizes
$main_title_text_size = get_field('main_title_text_size', 'option');
$main_menu_text_size = get_field('main_menu_text_size', 'option');
$toggle_menu_text_size = get_field('toggle_menu_text_size', 'option');
$secondary_menu_text_size = get_field('secondary_menu_text_size', 'option');
$section_menu_text_size = get_field('section_menu_text_size', 'option');
$footer_text_size = get_field('footer_text_size', 'option');
$captions_text_size = get_field('captions_text_size', 'option');
$thumbnails_title_text_size = get_field('thumbnails_title_text_size', 'option');
$row_item_overlay_text_size = get_field('row_item_overlay_text_size', 'option');
$index_text_size = get_field('index_text_size', 'option');
$slideshow_arrow_size = get_field('slideshow_arrow_size', 'option');
$focus_icon_size = get_field('focus_icon_size', 'option');
$focus_mode_margin_top = get_field('focus_mode_margin_top', 'option');
$focus_mode_margin_bottom = get_field('focus_mode_margin_bottom', 'option');
$comments_text_size_1 = get_field('comments_text_size_1', 'option');
$comments_text_size_2 = get_field('comments_text_size_2', 'option');

// COPY
$copy_1 = get_field('copy_1', 'option');
$copy_2 = get_field('copy_2', 'option');
$copy_3 = get_field('copy_3', 'option');
$copy_4 = get_field('copy_4', 'option');
$copy_5 = get_field('copy_5', 'option');
$copy_6 = get_field('copy_6', 'option');
$copy_7 = get_field('copy_7', 'option');
$copy_8 = get_field('copy_8', 'option');
$copy_9 = get_field('copy_9', 'option');
$copy_10 = get_field('copy_10', 'option');
$copy_11 = get_field('copy_11', 'option');
$copy_12 = get_field('copy_12', 'option');
$copy_13 = get_field('copy_13', 'option');
$copy_14 = get_field('copy_14', 'option');
$copy_15 = get_field('copy_15', 'option');
$copy_16 = get_field('copy_16', 'option');
$copy_17 = get_field('copy_17', 'option');
$copy_18 = get_field('copy_18', 'option');
$copy_19 = get_field('copy_19', 'option');
$copy_20 = get_field('copy_20', 'option');
$copy_21 = get_field('copy_21', 'option');
$copy_22 = get_field('copy_22', 'option');
$copy_23 = get_field('copy_23', 'option');
$copy_24 = get_field('copy_24', 'option');
$copy_25 = get_field('copy_25', 'option');

// TIME & DATE
$time_date_for_index_module = get_field('time_date_for_index_module', 'option');
$time_date_for_blog_module = get_field('time_date_for_blog_module', 'option');

// COLORS
$site_background_color = get_field('site_background_color', 'option');
$text_color = get_field('text_color', 'option');
$link_color = get_field('link_color', 'option');
$link_marked_color = get_field('link_marked_color', 'option');
$borders_color = get_field('borders_color', 'option');
$header_background_color = get_field('header_background_color', 'option');
$menu_background_color = get_field('menu_background_color', 'option');
$loader_color = get_field('loader_color', 'option');
$media_loader_bg_color = get_field('media_loader_bg_color', 'option');
$index_item_dimmed_color = get_field('index_item_dimmed_color', 'option');
$index_item_active_color = get_field('index_item_active_color', 'option');
$forms_border_color = get_field('forms_border_color', 'option');
$forms_background_color = get_field('forms_background_color', 'option');
$forms_text_color = get_field('forms_text_color', 'option');
$forms_focus_border_color = get_field('forms_focus_border_color', 'option');
$button_background_color = get_field('button_background_color', 'option');
$button_text_color = get_field('button_text_color', 'option');
$button_hover_background_color = get_field('button_hover_background_color', 'option');
$button_hover_text_color = get_field('button_hover_text_color', 'option');

// INTERFACE
$taxonomy_pagination_type = get_field('taxonomy_pagination_type', 'option');
$load_more_width = get_field('load_more_width', 'option');
$load_more_push = get_field('load_more_push', 'option');
$load_more_text_align = get_field('load_more_text_align', 'option');
$masonry_library = get_field('masonry_library', 'option');
$default_easing = get_field('default_easing', 'option');
$image_loaded_fade_speed = get_field('image_loaded_fade_speed', 'option');
$slideshow_speed = get_field('slideshow_speed', 'option');
$toggle_menu_speed = get_field('toggle_menu_speed', 'option');
$thumbnail_text_color = get_field('thumbnail_text_color', 'option');
$thumbnail_hover_text_color = get_field('thumbnail_hover_text_color', 'option');
$row_item_hover_background_color = get_field('row_item_hover_background_color', 'option');
$row_item_hover_text_color = get_field('row_item_hover_text_color', 'option');
$row_item_default_height = get_field('row_item_default_height', 'option');
$media_focus_inner_padding = get_field('media_focus_inner_padding', 'option');
$media_focus_icon = get_field('media_focus_icon', 'option');
$caption_padding = get_field('caption_padding', 'option');
$row_item_caption_padding = get_field('row_item_caption_padding', 'option');
$thumbnail_text_padding = get_field('thumbnail_text_padding', 'option');

// HISTORY
$history_state = get_field('history_state', 'option');
$history_transition_speed = get_field('history_transition_speed', 'option');
$history_transition_delay = get_field('history_transition_delay', 'option');
$history_color_transition_speed = get_field('history_color_transition_speed', 'option');
$history_cache = get_field('history_cache', 'option');
$page_loader = get_field('page_loader', 'option');
$page_loader_text = get_field('page_loader_text', 'option');
$page_loader_text_size = get_field('page_loader_text_size', 'option');

// NOTIFICATIONS
$notification_location = get_field('notification_location', 'option');
$notification_text = get_field('notification_text', 'option');
$notification_background_color = get_field('notification_background_color', 'option');
$notification_text_color = get_field('notification_text_color', 'option');
$notification_text_size = get_field('notification_text_size', 'option');
$notification_close_link = get_field('notification_close_link', 'option');

// FRONT PAGE
$frontpage_display_footer = get_field('frontpage_display_footer', 'option');

// SEARCH PAGE
$search_identifier = get_field('search_identifier', 'option');
$search_bar_top_margin = get_field('search_bar_top_margin', 'option');
$search_display_footer = get_field('search_display_footer', 'option');

// MOBILE
$mobile_header_position = get_field('mobile_header_position', 'option');
$mobile_logo_height = get_field('mobile_logo_height', 'option');
$mobile_logo_width = get_field('mobile_logo_width', 'option');
$mobile_header_top_padding = get_field('mobile_header_top_padding', 'option');
$mobile_header_bottom_padding = get_field('mobile_header_bottom_padding', 'option');
$mobile_header_border = get_field('mobile_header_border', 'option');
$mobile_site_margin_top = get_field('mobile_site_margin_top', 'option');
$mobile_site_margin_bottom = get_field('mobile_site_margin_bottom', 'option');
$mobile_site_margin_left = get_field('mobile_site_margin_left', 'option');
$mobile_site_margin_right = get_field('mobile_site_margin_right', 'option');
$mobile_menu_icon_padding_left = get_field('mobile_menu_icon_padding_left', 'option');
$mobile_menu_icon_padding_right = get_field('mobile_menu_icon_padding_right', 'option');
$mobile_header_bottom_margin = get_field('mobile_header_bottom_margin', 'option');
$mobile_forms_border_width = get_field('mobile_forms_border_width', 'option');
$mobile_toggle_menu_speed = get_field('mobile_toggle_menu_speed', 'option');
$mobile_thumbnails_force_hover = get_field('mobile_thumbnails_force_hover', 'option');

// TABLET
$tablet_header_position = get_field('tablet_header_position', 'option');
$tablet_logo_height = get_field('tablet_logo_height', 'option');
$tablet_logo_width = get_field('tablet_logo_width', 'option');
$tablet_header_top_padding = get_field('tablet_header_top_padding', 'option');
$tablet_header_bottom_padding = get_field('tablet_header_bottom_padding', 'option');
$tablet_header_border = get_field('tablet_header_border', 'option');
$tablet_site_margin_left = get_field('tablet_site_margin_left', 'option');
$tablet_site_margin_right = get_field('tablet_site_margin_right', 'option');
$tablet_menu_icon_padding_left = get_field('tablet_menu_icon_padding_left', 'option');
$tablet_menu_icon_padding_right = get_field('tablet_menu_icon_padding_right', 'option');
$tablet_header_bottom_margin = get_field('tablet_header_bottom_margin', 'option');
$tablet_toggle_menu_speed = get_field('tablet_toggle_menu_speed', 'option');
$tablet_thumbnails_force_hover = get_field('tablet_thumbnails_force_hover', 'option');

?>