/***


.....................................................................
Build by:

.....................................................................
Emil Olsson
http://emilolsson.com/
hi(at)emilolsson.com
@emilolsson

(*.*)    
.....................................................................


***/

<?php 

// BASE
$posts_per_page = get_option('posts_per_page');
$site_title = get_field('site_title', 'option');
$logo_state = get_field('logo_state', 'option');
$logo = get_field('logo', 'option');
$logo_retina = get_field('logo_retina', 'option');
$logo_height = get_field('logo_height', 'option');
$logo_width = get_field('logo_width', 'option');
$footer_column_1 = get_field('footer_column_1', 'option');
$footer_column_2 = get_field('footer_column_2', 'option');
$footer_column_3 = get_field('footer_column_3', 'option');
$footer_column_4 = get_field('footer_column_4', 'option');
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
$header_separator_bottom_margin = get_field('header_separator_bottom_margin', 'option');
$separator_height = get_field('separator_height', 'option');
$separator_height_alt = get_field('separator_height_alt', 'option');
$index_module_type = get_field('index_module_type', 'option');
$index_item_padding_top = get_field('index_item_padding_top', 'option');
$index_item_padding_bottom = get_field('index_item_padding_bottom', 'option');
$index_item_taxonomy_count = get_field('index_item_taxonomy_count', 'option');
$forms_padding = get_field('forms_padding', 'option');
$forms_margin_bottom = get_field('forms_margin_bottom', 'option');
$forms_border_width = get_field('forms_border_width', 'option');
$link_decoration = get_field('link_decoration', 'option');
$post_next_previous_links = get_field('post_next_previous_links', 'option');
// MENUS
$menu_items_padding_top = get_field('menu_items_padding_top', 'option');
$menu_items_padding_bottom = get_field('menu_items_padding_bottom', 'option');
$main_menu_type = get_field('main_menu_type', 'option');
$main_menu_float_gutter = get_field('main_menu_float_gutter', 'option');
$main_menu_width = get_field('main_menu_width', 'option');
$toggle_menu_margin_top = get_field('toggle_menu_margin_top', 'option');
$toggle_menu_margin_bottom = get_field('toggle_menu_margin_bottom', 'option');
$toggle_menu_items_width = get_field('toggle_menu_items_width', 'option');
$toggle_menu_render_type = get_field('toggle_menu_render_type', 'option');
$toggle_menu_line_height = get_field('toggle_menu_line_height', 'option');
$secondary_menu_items_width = get_field('secondary_menu_items_width', 'option');
$secondary_menu_render_type = get_field('secondary_menu_render_type', 'option');
$secondary_menu_line_height = get_field('secondary_menu_line_height', 'option');
$section_menu_items_width = get_field('section_menu_items_width', 'option');
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
$footer_text_size = get_field('footer_text_size', 'option');
$captions_text_size = get_field('captions_text_size', 'option');
$thumbnails_title_text_size = get_field('thumbnails_title_text_size', 'option');
$row_item_overlay_text_size = get_field('row_item_overlay_text_size', 'option');
$index_text_size = get_field('index_text_size', 'option');
$slideshow_arrow_size = get_field('slideshow_arrow_size', 'option');
$comments_text_size_1 = get_field('comments_text_size_1', 'option');
$comments_text_size_2 = get_field('comments_text_size_2', 'option');
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
$thumbnail_text_color = get_field('thumbnail_text_color', 'option');
$thumbnail_hover_text_color = get_field('thumbnail_hover_text_color', 'option');
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
$mobile_index_item_padding_top = get_field('mobile_index_item_padding_top', 'option');
$mobile_index_item_padding_bottom = get_field('mobile_index_item_padding_bottom', 'option');
$mobile_forms_border_width = get_field('mobile_forms_border_width', 'option');
$mobile_caption_padding = get_field('mobile_caption_padding', 'option');
$mobile_thumbnails_force_hover = get_field('mobile_thumbnails_force_hover', 'option');
$mobile_toggle_menu_speed = get_field('mobile_toggle_menu_speed', 'option');
$mobile_menu_items_padding_top = get_field('mobile_menu_items_padding_top', 'option');
$mobile_menu_items_padding_bottom = get_field('mobile_menu_items_padding_bottom', 'option');
$mobile_footer_padding_top = get_field('mobile_footer_padding_top', 'option');
$mobile_footer_padding_bottom = get_field('mobile_footer_padding_bottom', 'option');
$mobile_small_font_size = get_field('mobile_small_font_size', 'option');
$mobile_small_font_line_height = get_field('mobile_small_font_line_height', 'option');
$mobile_default_font_size = get_field('mobile_default_font_size', 'option');
$mobile_default_font_line_height = get_field('mobile_default_font_line_height', 'option');
$mobile_large_font_size = get_field('mobile_large_font_size', 'option');
$mobile_large_font_line_height = get_field('mobile_large_font_line_height', 'option');
$mobile_huge_font_size = get_field('mobile_huge_font_size', 'option');
$mobile_huge_font_line_height = get_field('mobile_huge_font_line_height', 'option');
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


/***
SASS VARIABLES
***/
// Base
$logo: '<?php echo $logo; ?>';
$logo_retina: '<?php echo $logo_retina; ?>';
$logo_height: <?php echo $logo_height; ?>px;
$logo_width: <?php echo $logo_width; ?>px;
// Layout
$max_site_width: <?php echo $max_site_width; ?>px;
$site_margin_top: <?php echo $site_margin_top; ?>px;
$site_margin_bottom: <?php echo $site_margin_bottom; ?>px;
$site_margin_left: <?php echo $site_margin_left; ?>;
$site_margin_right: <?php echo $site_margin_right; ?>;
$site_left_right_border: <?php echo $site_left_right_border; ?>;
$site_left_right_border_margin: <?php echo $site_left_right_border_margin; ?>px;
$site_left_right_border_width: <?php echo $site_left_right_border_width; ?>px;
$header_top_padding: <?php echo $header_top_padding; ?>px;
$header_bottom_padding: <?php echo $header_bottom_padding; ?>px;
$header_bottom_margin: <?php echo $header_bottom_margin; ?>px;
$footer_top_padding: <?php echo $footer_top_padding; ?>px;
$footer_bottom_padding: <?php echo $footer_bottom_padding; ?>px;
$grid_gutter: <?php echo $grid_gutter; ?>px;
$paragraph_inner_right_padding: <?php echo $paragraph_inner_right_padding; ?>px;
$header_separator_height: <?php echo $header_separator_height; ?>px;
$header_separator_bottom_margin: <?php echo $header_separator_bottom_margin; ?>px;
$separator_height: <?php echo $separator_height; ?>px;
$separator_height_alt: <?php echo $separator_height_alt; ?>px;
// Menus
$menu_items_padding_top: <?php echo $menu_items_padding_top; ?>px;
$menu_items_padding_bottom: <?php echo $menu_items_padding_bottom; ?>px;
$main_menu_type: <?php echo $main_menu_type; ?>px;
$main_menu_float_gutter = <?php echo $main_menu_float_gutter; ?>px;
$main_menu_width: <?php echo $main_menu_width; ?>px;
$toggle_menu_margin_top: <?php echo $toggle_menu_margin_top; ?>px;
$toggle_menu_margin_bottom: <?php echo $toggle_menu_margin_bottom; ?>px;
$toggle_menu_items_width: <?php echo $toggle_menu_items_width; ?>;
$toggle_menu_line_height: <?php echo $toggle_menu_line_height; ?>px;
$secondary_menu_items_width: <?php echo $secondary_menu_items_width; ?>;
$secondary_menu_line_height: <?php echo $secondary_menu_line_height; ?>px;
$section_menu_items_width: <?php echo $section_menu_items_width; ?>;
$section_menu_line_height: <?php echo $section_menu_line_height; ?>px;
// Modules
$index_item_padding_top: <?php echo $index_item_padding_top; ?>px;
$index_item_padding_bottom: <?php echo $index_item_padding_bottom; ?>px;
$forms_padding: <?php echo $forms_padding; ?>px;
$forms_margin_bottom: <?php echo $forms_margin_bottom; ?>px;
$forms_border_width: <?php echo $forms_border_width; ?>px;
$link_decoration: <?php echo $link_decoration; ?>;
// Typography
$default_font: <?php echo $default_font; ?>;
$small_font: <?php echo $small_font; ?>;
$large_font: <?php echo $large_font; ?>;
$huge_font: <?php echo $huge_font; ?>;
$default_font_size: <?php echo $default_font_size; ?>;
$default_font_line_height: <?php echo $default_font_line_height; ?>;
$small_font_size: <?php echo $small_font_size; ?>;
$small_font_line_height: <?php echo $small_font_line_height; ?>;
$large_font_size: <?php echo $large_font_size; ?>;
$large_font_line_height: <?php echo $large_font_line_height; ?>;
$huge_font_size: <?php echo $huge_font_size; ?>;
$huge_font_line_height: <?php echo $huge_font_line_height; ?>;
// Colors
$site_background_color: <?php echo $site_background_color; ?>;
$text_color: <?php echo $text_color; ?>;
$link_color: <?php echo $link_color; ?>;
$link_marked_color: <?php echo $link_marked_color; ?>;
$borders_color: <?php echo $borders_color; ?>;
$header_background_color: <?php echo $header_background_color; ?>;
$menu_background_color: <?php echo $menu_background_color; ?>;
$loader_color: <?php echo $loader_color; ?>;
$media_loader_bg_color: <?php echo $media_loader_bg_color; ?>;
$thumbnail_text_color: <?php echo $thumbnail_text_color; ?>;
$thumbnail_hover_text_color: <?php echo $thumbnail_hover_text_color; ?>;
$index_item_dimmed_color: <?php echo $index_item_dimmed_color; ?>;
$index_item_active_color: <?php echo $index_item_active_color; ?>;
$forms_border_color: <?php echo $forms_border_color; ?>;
$forms_background_color: <?php echo $forms_background_color; ?>;
$forms_text_color: <?php echo $forms_text_color; ?>;
$forms_focus_border_color: <?php echo $forms_focus_border_color; ?>;
$button_background_color: <?php echo $button_background_color; ?>;
$button_text_color: <?php echo $button_text_color; ?>;
$button_hover_background_color: <?php echo $button_hover_background_color; ?>;
$button_hover_text_color: <?php echo $button_hover_text_color; ?>;
// Media
$thumbnail_text_color: <?php echo $thumbnail_text_color; ?>;
$thumbnail_hover_text_color: <?php echo $thumbnail_hover_text_color; ?>;
$row_item_hover_background_color: <?php echo $row_item_hover_background_color; ?>;
$row_item_hover_text_color: <?php echo $row_item_hover_text_color; ?>;
$row_item_default_height: <?php echo $row_item_default_height; ?>;
$media_focus_inner_padding: <?php echo $media_focus_inner_padding; ?>;
$caption_padding: <?php echo $caption_padding; ?>;
$row_item_caption_padding: <?php echo $row_item_caption_padding; ?>;
$thumbnail_text_padding: <?php echo $thumbnail_text_padding; ?>;

// History

// Notifications
$notification_background_color: <?php echo $notification_background_color; ?>;
$notification_text_color: <?php echo $notification_text_color; ?>;

// Front Page

// Search Page

// Mobile
$mobile_logo_height: <?php echo $mobile_logo_height; ?>px;
$mobile_logo_width: <?php echo $mobile_logo_width; ?>px;
$mobile_header_top_padding: <?php echo $mobile_header_top_padding; ?>px;
$mobile_header_bottom_padding: <?php echo $mobile_header_bottom_padding; ?>px;
$mobile_site_margin_top: <?php echo $mobile_site_margin_top; ?>px;
$mobile_site_margin_bottom: <?php echo $mobile_site_margin_bottom; ?>px;
$mobile_site_margin_left: <?php echo $mobile_site_margin_left; ?>;
$mobile_site_margin_right: <?php echo $mobile_site_margin_right; ?>;
$mobile_menu_icon_padding_left: <?php echo $mobile_menu_icon_padding_left; ?>px;
$mobile_menu_icon_padding_right: <?php echo $mobile_menu_icon_padding_right; ?>px;
$mobile_header_bottom_margin: <?php echo $mobile_header_bottom_margin; ?>px;
$mobile_menu_items_padding_top: <?php echo $mobile_menu_items_padding_top; ?>px;
$mobile_menu_items_padding_bottom: <?php echo $mobile_menu_items_padding_bottom; ?>px;
$mobile_footer_padding_top: <?php echo $mobile_footer_padding_top; ?>px;
$mobile_footer_padding_bottom: <?php echo $mobile_footer_padding_bottom; ?>px;
$mobile_index_item_padding_top: <?php echo $mobile_index_item_padding_top; ?>px;
$mobile_index_item_padding_bottom: <?php echo $mobile_index_item_padding_bottom; ?>px;
$mobile_forms_border_width: <?php echo $mobile_forms_border_width; ?>px;
$mobile_caption_padding: <?php echo $mobile_caption_padding; ?>;
$mobile_small_font_size: <?php echo $mobile_small_font_size; ?>;
$mobile_small_font_line_height: <?php echo $mobile_small_font_line_height; ?>;
$mobile_default_font_size: <?php echo $mobile_default_font_size; ?>;
$mobile_default_font_line_height: <?php echo $mobile_default_font_line_height; ?>;
$mobile_large_font_size: <?php echo $mobile_large_font_size; ?>;
$mobile_large_font_line_height: <?php echo $mobile_large_font_line_height; ?>;
$mobile_huge_font_size: <?php echo $mobile_huge_font_size; ?>;
$mobile_huge_font_line_height: <?php echo $mobile_huge_font_line_height; ?>;

// Tablet
$tablet_logo_height: <?php echo $tablet_logo_height; ?>px;
$tablet_logo_width: <?php echo $tablet_logo_width; ?>px;
$tablet_header_top_padding: <?php echo $tablet_header_top_padding; ?>px;
$tablet_header_bottom_padding: <?php echo $tablet_header_bottom_padding; ?>px;
$tablet_site_margin_left: <?php echo $tablet_site_margin_left; ?>;
$tablet_site_margin_right: <?php echo $tablet_site_margin_right; ?>;
$tablet_menu_icon_padding_left: <?php echo $tablet_menu_icon_padding_left; ?>px;
$tablet_menu_icon_padding_right: <?php echo $tablet_menu_icon_padding_right; ?>px;
$tablet_header_bottom_margin: <?php echo $tablet_header_bottom_margin; ?>px;

/*** 
RESET
***/

/*! normalize.css v1.1.0 | MIT License | git.io/normalize */article,aside,details,figcaption,figure,footer,header,hgroup,main,nav,section,summary{display:block}audio,canvas,video{display:inline-block;*display:inline;*zoom:1}audio:not([controls]){display:none;height:0}[hidden]{display:none}html{font-size:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}html,button,input,select,textarea{font-family:sans-serif}body{margin:0}a:focus{outline:thin dotted}a:active,a:hover{outline:0}abbr[title]{border-bottom:1px dotted}b,strong{font-weight:bold}blockquote{margin:1em 40px}dfn{font-style:italic}hr{-moz-box-sizing:content-box;box-sizing:content-box;height:0}mark{background:#ff0;color:#000}p,pre{margin:0}code,kbd,pre,samp{font-family:monospace,serif;_font-family:'courier new',monospace;font-size:1em}pre{white-space:pre;white-space:pre-wrap;word-wrap:break-word}q{quotes:none}q:before,q:after{content:'';content:none}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sup{top:-0.5em}sub{bottom:-0.25em}dl,menu,ol,ul{margin:0}dd{margin:0}menu,ol,ul{padding:0}nav ul,nav ol{list-style:none;list-style-image:none}img{border:0;-ms-interpolation-mode:bicubic}svg:not(:root){overflow:hidden}figure{margin:0}form{margin:0}fieldset{border:0px solid #c0c0c0;margin:0;padding:0;}legend{border:0;padding:0;white-space:normal;*margin-left:-7px}button,input,select,textarea{font-size:100%;margin:0;vertical-align:baseline;*vertical-align:middle}button,input{line-height:normal}button,select{text-transform:none}button,html input[type="button"],input[type="reset"],input[type="submit"]{-webkit-appearance:button;cursor:pointer;*overflow:visible}button[disabled],html input[disabled]{cursor:default}input[type="checkbox"],input[type="radio"]{box-sizing:border-box;padding:0;*height:13px;*width:13px}input[type="search"]{-webkit-appearance:textfield;-moz-box-sizing:content-box;-webkit-box-sizing:content-box;box-sizing:content-box}input[type="search"]::-webkit-search-cancel-button,input[type="search"]::-webkit-search-decoration{-webkit-appearance:none}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}textarea{overflow:auto;vertical-align:top}table{border-collapse:collapse;border-spacing:0}img{margin: 0;padding: 0;display: block;}


/***
START
***/

body, html {
color: $text_color;
background: $site_background_color;
width: 100%;
margin: 0;
padding: 0px;
-webkit-font-smoothing: antialiased;
}

body {
overflow-x: hidden;
overflow-y: scroll;
}

// LINKS
a {
color: $link_color;
text-decoration: none;
outline:none;
}
a:hover {
color: $link_marked_color;
}
a, a:hover, a:active, a:focus {
outline: none;
}
h1 a, h2 a, h3 a, h4 a, h5 a {
color:$link_color;
}
.current-menu-item a, .current-category-ancestor a, a.marked, .current-cat a {
color: $link_marked_color;
}
ul.sub-menu a {
color: $link_color;
  &:hover {
    color: $link_marked_color;
  }
}
ul.sub-menu {
  .current-menu-item a, .current-category-ancestor a, a.marked, .current-cat a {
    color: $link_marked_color;
  }
}

.thumb span.underline {
border-bottom: 0px solid $link_marked_color; 
}

  // Don't ask
input#magic-trigger-plate {
position: fixed;
top: -100px;
bottom: -100px;
//z-index:9999;
width: 10px;
width: 10px;
}

<?php if ($link_decoration == '1px always') { ?>
a {
border-bottom: 1px solid $link_color;
}
a:hover {
border-bottom: 1px solid $link_marked_color;
}
a.underline {
border-bottom: 1px solid $link_color;
}
/*
.thumb span.underline {
border-bottom: 1px solid $thumbnail_text_color;
}
.thumb:hover span.underline {
border-bottom: 1px solid $thumbnail_hover_text_color;
}
*/
.dimmed a, .dimmed a:hover {
border-bottom: 1px solid $index_item_dimmed_color !important;
}
.active a, .active a:hover {
border-bottom: 1px solid $index_item_active_color !important;
}
.current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
border-bottom: 1px solid $link_marked_color;
}
#menu-main-menu a.marked, h1 a.marked, a.marked {
border-bottom: 1px solid $link_marked_color; 
}
#menu-main-menu a:hover, h1 a:hover, a.marked {
border-bottom: 1px solid $link_marked_color; 
}
a.unmarked {
border-bottom: 1px solid transparent !important; 
}
<?php } else if ($link_decoration == '1px on mouseover and marked') { ?>
a {
border-bottom: 1px solid transparent;
}
a:hover {
border-bottom: 1px solid $link_marked_color;
}
a.underline {
border-bottom: 1px solid transparent;
}
/*
.thumb span.underline {
border-bottom: 1px solid transparent;
}
.thumb:hover span.underline {
border-bottom: 1px solid $thumbnail_hover_text_color;
}
*/
.dimmed a {
border-bottom: 1px solid transparent;
}
.dimmed a:hover {
border-bottom: 1px solid $index_item_dimmed_color;
}
.active a {
border-bottom: 1px solid transparent;
}
.active a:hover {
border-bottom: 1px solid $index_item_active_color;
}
.current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
border-bottom: 1px solid $link_marked_color;
}
#menu-main-menu a.marked, h1 a.marked {
border-bottom: 1px solid $link_marked_color; 
}
#menu-main-menu a:hover, h1 a:hover {
border-bottom: 1px solid $link_marked_color; 
}
a.unmarked {
border-bottom: 1px solid transparent !important; 
}
<?php } else if ($link_decoration == '1px special') { ?>
a {
border-bottom: 1px solid transparent;
}
a:hover {
border-bottom: 1px solid $link_marked_color;
}
a.underline {
border-bottom: 1px solid transparent;
}
/*
.thumb span.underline {
border-bottom: 1px solid transparent;
}
.thumb:hover span.underline {
border-bottom: 1px solid transparent;
}
*/
.dimmed a {
border-bottom: 1px solid transparent;
}
.dimmed a:hover {
border-bottom: 1px solid $index_item_dimmed_color;
}
.active a {
border-bottom: 1px solid transparent;
}
.active a:hover {
border-bottom: 1px solid $index_item_active_color;
}
.current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
border-bottom: 1px solid $link_marked_color;
}
#menu-main-menu a.marked, h1 a.marked, .marked {
border-bottom: 1px solid $link_marked_color; 
}
#menu-main-menu a:hover, h1 a:hover {
border-bottom: 1px solid $link_marked_color;
}
a.unmarked {
border-bottom: 1px solid transparent !important; 
}
<?php } ?>

.underline {
border-bottom: 1px solid $link_marked_color; 
}

.line-through {
text-decoration: line-through !important; 
}

a.img-holder, a.thumb {
border-bottom: 0px !important;
}

// LISTS
ul, ol, li {
margin: 0;
padding: 0;
list-style: none;
list-style-type: none;
}

// Quotes
blockquote {
  padding: 0;
  margin: 0;
  margin: 0px $grid_gutter*2 0px $grid_gutter*2;
  
  p {
    margin: 0 !important;
    padding: 0 !important;
  }
  
  cite {
    font-style: normal;
  }
}

// TABLE defaults
table {
  border:0;
  padding:0;
  margin:0;
  width: 100%;
  text-align: left;
  
  th {
    font-weight: normal;
  }
  
  tr {
    border:0;
    text-align: left;
    border-top: $separator_height solid $borders_color;
  
    td {
      border:0;
      padding-top: 0;
      padding-bottom: 0;
      text-align: left;
      
      p {
        padding-right: 0px;
      }
    }
  }
}


/*** 
BASE
***/

#change, #header-inner, #footer-inner {
max-width: $max_site_width;
margin: 0px auto;
}

#header.fixed #header-inner, #footer.fixed #footer-inner,  #toggle-menu-inner {
max-width: $max_site_width;
margin: 0px auto;
}

#wrap, #change, #content, #relative, #header-inner, #footer-inner {
overflow: auto;
}

#content {
overflow: hidden;
}

#wrap {
padding-top: $site_margin_top;
margin-right: $site_margin_right;
margin-bottom: $site_margin_bottom;
margin-left: $site_margin_left;
}

<?php if ($site_left_right_border) { ?>
#border-left, #border-right {
position: fixed;
width: 0px;
height: 100%;
border-left: $site_left_right_border_width solid $borders_color;
z-index: 9990;
}
#border-left {
left: $site_margin_left;
margin-left: 0 - $site_left_right_border_margin;
}
#border-right {
right: $site_margin_right;
margin-right: 0 - $site_left_right_border_margin;
}
<?php } ?>

// HEADER
#header {
position: absolute;
top: 0;
left: 0;
width: 100%;
z-index: 2;
background: $header_background_color;
}

#header-inner {
background: $header_background_color;
padding-top: $header_top_padding;
padding-bottom: $header_bottom_padding;
padding-right: $site_margin_right;
padding-left: $site_margin_left;

  #header-separator {
    border-top: $header_separator_height solid $borders_color;
    margin-bottom: $header_separator_bottom_margin;
  }

  #logo-h1 {
    line-height: 0px !important; 
    height: $logo_height; 
    overflow: hidden;
    
    #logo-image {
      height: $logo_height;
      width: $logo_width;
      display: block;
      background: transparent url($logo) no-repeat;
      background-size: $logo_width $logo_height !important;
    }
  }
  
}

#header.fixed {
position: fixed;
left: 0px;
top: 0px;
width: 100%;
z-index: 9989;
}

#header.fixed #header-inner {
padding-right: $site_margin_right;
padding-left: $site_margin_left;
}

// CONTENT
#relative {
position: relative;
}

#content {
margin-top: $header_bottom_margin;
}

#content p, #footer p {
padding-right: $paragraph_inner_right_padding;
}
#content p.align-right, #footer p.align-right {
padding-left: $paragraph_inner_right_padding;
padding-right: 0px;
}
#content p.align-center, #footer p.align-center {
padding-left: $paragraph_inner_right_padding;
padding-right: $paragraph_inner_right_padding;
}

// FOOTER
#footer {
position: relative;
z-index: 2;
}

#footer-inner {
padding-top: $footer_top_padding;
padding-bottom: $footer_bottom_padding;
}

#footer.fixed {
position: fixed;
left: 0px;
bottom: 0px;
width: 100%;
z-index: 999;
}

#footer.fixed #footer-inner {
margin-right: $site_margin_right;
margin-left: $site_margin_left;
}

// SEARCH
#search-holder {
width: 10%;
text-align:right;

  input {
    text-align:right;
    border-bottom: 1px solid $text_color !important;
  }

}

// MENU's

#menu-holder {
position: relative;
}

#menu-main-menu {
overflow: hidden;
}

#menu-main-menu ul, #menu-main-menu li, #menu-main-menu a {
padding: 0;
margin:0;
}
// Tight menu setting (Gridded menu)
#menu-holder #menu-main-menu .menu-item, #menu-holder .page_item  {
width: 25%;
float: left;
}
// Wide menu setting (Gridded menu)
#menu-holder.wide #menu-main-menu .menu-item, #menu-holder.wide .page_item  {
width: 33.33%;
}
// Float Right Menu
#menu-holder.float-right #menu-main-menu .menu-item, #menu-holder.float-right .page_item  {
width: auto;
float: right;
}
// Float Left Menu
#menu-holder.float-left #menu-main-menu .menu-item, #menu-holder.float-left .page_item  {
width: auto;
float: left;
}
// Menu gutters
#menu-main-menu .menu-item a, #menu-holder .page_item a {
margin-right: $grid_gutter;
margin-left: $grid_gutter;
overflow: auto;
}
#menu-holder.float-left #menu-main-menu .menu-item a, #menu-holder.float-left .page_item a {
margin-right: $main_menu_float_gutter;
margin-left: 0;
}
#menu-holder.float-right #menu-main-menu .menu-item a, #menu-holder.float-right .page_item a  {
margin-right: 0;
margin-left: $main_menu_float_gutter;
}
#menu-holder.float-left #menu-main-menu, #menu-holder.float-right #menu-main-menu {
padding-left: $grid_gutter;
padding-right: $grid_gutter;
}

#menu-holder.none #menu-main-menu {
display: none;
}

#menu-icon {
margin-right: $grid_gutter;
cursor: pointer;
display:none;
float: right;
border-bottom: 0px solid !important;
}

#toggle-menu {
  
  background: $menu_background_color;
  position: fixed;
  width: 100%;
  overflow: hidden;
  z-index: 101;
  top: -10000px;
  
  #toggle-menu-inner {
    padding-left: $site_margin_left;
    padding-right: $site_margin_right;
    overflow: hidden;

    .menu-item {
      margin: 0px;
      padding: 0;
      width: 25%;
      float: left;
    }

    ul {
      overflow: hidden;
      
      li {
        
        a {
          display: block;
          margin: 0;
          margin-left: $grid_gutter;
          margin-right: $grid_gutter;
        }

      }
    }
    
    .sub-menu {
    
      .menu-item {
        width: 100%;
      }
    
    }
      
  }
}

#toggle-menu a, #toggle-menu a:hover {
  border-bottom: 0px solid red !important;
}

#toggle-menu.static {
  position: absolute;
  width: 100%;
  overflow: auto;
  z-index: 1;
  display: none;
  
  #toggle-menu-inner {
    padding-left: 0;
    padding-right: 0;
    padding-left: $site_margin_left;
    padding-right: $site_margin_right;
  }
}

ul.menu {
  .menu-item {
    margin: 0px;
    padding: 0;
    width: 25%;
    float: left;
  }
  li {
    a {
      display: block;
      margin: 0;
      margin-left: $grid_gutter;
      margin-right: $grid_gutter;
    } 
  } 
}

#secondary_menu_holder {
  .menu-item {
    width: $secondary_menu_items_width;
    float: left;
  }
}

#section_menu_holder {
  .menu-item {
    width: $section_menu_items_width;
    float: left;
  }
}

ul.sub-menu li {
  clear: both !important;
  width: 100% !important;
  display: block !important;
}

#toggle-menu-inner, #secondary_menu_holder, #section_menu_holder {
  li {
    a {
      margin-top: $menu_items_padding_top !important;
      margin-bottom: $menu_items_padding_bottom !important;
    } 
  } 
}

<?php if ($toggle_menu_render_type == 'Menu item top line') { ?>

#toggle-menu-inner {
  li {
    a {
      border-top: $toggle_menu_line_height solid $borders_color;
      margin-top: 0px !important;
      padding-top: $menu_items_padding_top !important;
    } 
  } 
}

<?php } ?>

<?php if ($secondary_menu_render_type == 'Menu item top line') { ?>

#secondary_menu_holder {
  li {
    a {
      border-top: $secondary_menu_line_height solid $borders_color;
      margin-top: 0px !important;
      padding-top: $menu_items_padding_top !important;
    } 
  } 
}

<?php } ?>

<?php if ($section_menu_render_type == 'Menu item top line') { ?>

#section_menu_holder {
  li {
    a {
      border-top: $section_menu_line_height solid $borders_color;
      margin-top: 0px !important;
      padding-top: $menu_items_padding_top !important;
    } 
  } 
}

<?php } ?>

<?php if ($header_background_transparency == true) { ?>
#header, #header-inner, #toggle-menu {
  background: transparent;
}
<?php } ?>

/***
UI
***/

#block {
position:fixed;
top:0px;
left:0px;
width:100%;
height:100%;
z-index:998;
background: $site_background_color;
}

#cover {
position:fixed;
top:0px;
left:0px;
width:100%;
height:100%;
z-index:9991;
background: $site_background_color;
display: block;
cursor: pointer;
}

#focus {
position:fixed;
top:0;
left:0;
z-index:9991;
cursor: pointer;
}


/***
UNIVERSALS
***/

.clear {
clear: both;
}
.empty {
padding: 0;
line-height: 0 !important;
font-size: 0 !important;
height: 1px !important;
}
.left {
float:left;
}
.right {
float:right !important;
}
.align-left {
text-align: left;
}
.align-right {
text-align: right;
}
.align-center {
text-align: center;
}
.hide {
display:none;
}
.block {
display: block; 
}
.dimmed, .dimmed a {
color: $index_item_dimmed_color;
}
.active, .active a {
color: $index_item_active_color;
}

#dimmed-page {
position: fixed;
top: 50%;
left: 50%;
z-index: 9;
}

// SELECTS
.noselect, img, .slide-prev, .slide-next, .slide, .slidedots, #header, #header-inner, div, span, #menu-icon {
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none; 
}
h2, h3, p, span, a {
-webkit-touch-callout: auto !important;
-webkit-user-select: auto !important;
-khtml-user-select: auto !important;
-moz-user-select: auto !important;
-ms-user-select: auto !important;
user-select: auto !important;
}
#nextprev a.next, #nextprev a.prev {
-webkit-touch-callout: none;
-webkit-user-select: none;
-khtml-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none; 
}
::selection {
background: rgba(208, 199, 194, 0.3);
}
::-moz-selection {
background: rgba(208, 199, 194, 0.3);
}

// LINES
hr {
margin:0;
padding:0;
border:0;
border-top: $separator_height solid $borders_color;
height:0px;
width:100%;
}

// NOTIFICATIONS
#notifications {
background: $notification_background_color;
color: $notification_text_color;
width: 100%;
padding: 15px;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
z-index: 9990;
//cursor: pointer;
display: none;
}

// MEDIA
.figcaption {
padding: $caption_padding;
}

iframe {
margin: 0;
padding: 0;
display: block;
background: $media_loader_bg_color;
position: relative;
z-index: 99;
}

.img-holder {
width:100%;
min-width:100%;
max-width: 100%;
background: $media_loader_bg_color;
position: relative;
display: block;
z-index: 100;


  .focus-mode {
    position: absolute;
    top: 0px;
    right: 0px;
    z-index: 99;
    line-height: 74% !important;
    margin: $media_focus_inner_padding;
    display: none;
    cursor: pointer;
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=80)";
    filter: alpha(opacity=80);
    -moz-opacity: 0.8;
    -khtml-opacity: 0.8;
    opacity: 0.8;
    
    &:hover {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      -moz-opacity: 1;
      -khtml-opacity: 1;
      opacity: 1;
    }
    
  }
  
  &:hover .focus-mode {
    display: block;
  }
  
  

}

.img-holder img {
width:100%;
height:auto;
}

.img-holder.ready {
background: transparent !important;
}

// BG
#bg {
position:fixed;
left:0;
top:0;
width:100%;
height:100%;
z-index:0;

  .bleed {
    overflow: hidden;
  }
}

// MODULES
.module, .stack {
  overflow: auto;
  clear: left;
  position: relative;
  //padding-top: $module_padding_top;
  //padding-bottom: $module_padding_bottom;
}

// Modules padding top
.module.mpt-lb-0, .stack.smt-lb-0 {
  padding-top: ($default_font_line_height * 0)px;
}
.module.mpt-lb-0-1, .stack.smt-lb-0-1 {
  padding-top: ($default_font_line_height * 0.1)px;
}
.module.mpt-lb-0-25, .stack.smt-lb-0-25 {
  padding-top: ($default_font_line_height * 0.25)px;
}
.module.mpt-lb-0-5, .stack.smt-lb-0-5 {
  padding-top: ($default_font_line_height * 0.5)px;
}
.module.mpt-lb-1, .stack.smt-lb-1 {
  padding-top: ($default_font_line_height * 1)px;
}
.module.mpt-lb-1-5, .stack.smt-lb-1-5 {
  padding-top: ($default_font_line_height * 1.5)px;
}
.module.mpt-lb-2, .stack.smt-lb-2 {
  padding-top: ($default_font_line_height * 2)px;
}
.module.mpt-lb-2-5, .stack.smt-lb-2-5 {
  padding-top: ($default_font_line_height * 2.5)px;
}
.module.mpt-lb-3, .stack.smt-lb-3 {
  padding-top: ($default_font_line_height * 3)px;
}

// Modules padding bottom
.module.mpb-lb-0, .stack.smb-lb-0 {
  padding-bottom: ($default_font_line_height * 0)px;
}
.module.mpb-lb-0-1, .stack.smb-lb-0-1 {
  padding-bottom: ($default_font_line_height * 0.1)px;
}
.module.mpb-lb-0-25, .stack.smb-lb-0-25 {
  padding-bottom: ($default_font_line_height * 0.25)px;
}
.module.mpb-lb-0-5, .stack.smb-lb-0-5 {
  padding-bottom: ($default_font_line_height * 0.5)px;
}
.module.mpb-lb-1, .stack.smb-lb-1 {
  padding-bottom: ($default_font_line_height * 1)px;
}
.module.mpb-lb-1-5, .stack.smb-lb-1-5 {
  padding-bottom: ($default_font_line_height * 1.5)px;
}
.module.mpb-lb-2, .stack.smb-lb-2 {
  padding-bottom: ($default_font_line_height * 2)px;
}
.module.mpb-lb-2-5, .stack.smb-lb-2-5 {
  padding-bottom: ($default_font_line_height * 2.5)px;
}
.module.mpb-lb-3, .stack.smb-lb-3 {
  padding-bottom: ($default_font_line_height * 3)px;
}

// TEXT Module
.text-module {
  //   
}
// GRID Module
.grid-module {
  overflow: hidden !important;
}
// MASONRY Module
.masonry-module {
  overflow: hidden !important;
  
  .masonry-module-inner {
    overflow: hidden;
    
    .masonry {
      overflow: hidden;
    }
  }
}
// ROW Module
.row-module {
  overflow: auto;
  
  .figcaption {
    background: transparent !important;
  }
  
  .figcaption-bg {
    background: $row_item_hover_background_color;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    z-index: 99;
    display: none;
  }
  
  .row {
    overflow: hidden;
    
    .row-item {
      overflow: hidden;
      border: 0px solid transparent !important;
      
      .img-holder {
        height: $row_item_default_height;
        
        img {
          height: $row_item_default_height;
        }
      }
    }
  }
}
// BLOG Module
.blog-module {
  overflow: auto;

  // Captions
  .figcaption, p, .blog-link {
    padding-left: 0px !important;
    padding-right: 0px !important;
  }

  // Link
  .blog-link {
    display: block;
  }
  
  // Image max width
  .img-holder img {
    max-width: 100%;
  }
  
  /* Slideshow caption fix */
  .flexslider .flex-caption {
    padding: 20px !important;
    padding-bottom: 18px !important;
  }

}
// TABLE Module
.table-module {
  overflow: auto;
  border-collapse: collapse;

  table {
    border:0;
    padding:0;
    margin:0;
    width: 100%;
    
    tr {
      border:0;
    
      td {
        border:0;
        padding: $grid_gutter;
        padding-top: 0;
        padding-bottom: 0;
        
        p {
          padding-right: 0px;
        }
      }
    }
  }

}
// INDEX Module
.index-module {
  margin-top: 0px;
  
  .index-item-inner {
    padding-top: $index_item_padding_top;
    padding-bottom: $index_item_padding_bottom;
    overflow: auto;
    
    .col {
      overflow: hidden;
      .col-inner-hori {
        overflow: hidden;
      }
    }
  }
  .index-item {
    width: 100%;
    overflow: auto;
  }
  .index-item .index-separator {
    position: absolute;

    hr {
      border-top: $separator_height_alt solid $borders_color !important;
    }
  }
}
// SLIDESHOW Module
.slideshow-module {
  overflow: auto;
  .slideshow-wrap {
    padding-top: $grid_gutter;
  }
}
// SEPARATOR Module
.separator-module {
  overflow: visible;
  
  .separator-hr {
    position: absolute;
    z-index: 99;

    hr {

    }
  }
}

// Toggle menu
.separator-module.toggle-menu-separator {
  width:100%;
  overflow: hidden;
  .separator-hr {
    position: relative;
    hr {
      border-top: $toggle_menu_line_height solid $borders_color;
    }
  }
}

// Secondary menu module
.separator-module.secondary-menu-separator {
  .separator-hr {
    position: relative;
    hr {
      border-top: $secondary_menu_line_height solid $borders_color;
    }
  }
}

// Section menu module
.separator-module.section-menu-separator {
  .separator-hr {
    position: relative;
    hr {
      border-top: $section_menu_line_height solid $borders_color;
    }
  }
}

.archive-module {
  padding-bottom: 0px;
}

// GRID LAYOUT
.grid-holder {
overflow: auto;
width: 100%;
}
.grid-holder .grid {
overflow: auto;
width: 100%;
}
.grid-holder .grid .grid-item {

}

// ROW LAYOUT
.row-holder {
  
}
.row-holder .row {
padding-left: $grid_gutter;
padding-right: $grid_gutter;
}
.row-holder .row .row-item .img-holder img {
width: auto !important;
}

.row-holder .row {
margin-top: $grid_gutter;
}

.row-holder .row .row-item .col-inner {
margin-left: 0px;
margin-right: $grid_gutter * 2;
margin-bottom: $grid_gutter * 2;
margin-top: 0px;
}

.row-holder .row .row-item .img-holder {

  .figcaption {
    position: absolute;
    width: 100%;
    height: 100%;
    z-index: 99;
    margin: 0;
    padding: 0;
    background: $row_item_hover_background_color;
    color: $row_item_hover_text_color;
    display: none;
    cursor: pointer;
    overflow: hidden;
    
    div {
      display: block;
      padding: $row_item_caption_padding;
      overflow: hidden;
    }
  }
  
}
.row-holder .row .row-item-default .img-holder.ready {
  &:hover {
    .figcaption, .figcaption-bg {
      display: block;
    }
  }
}

// MASONRY LAYOUT
.masonry-holder {
overflow: auto;
width: 100%;
overflow: hidden;
}
.masonry-holder .masonry {
overflow: auto;
width: 100%;
}
.masonry-holder .masonry .masonry-item {

}
.masonry-filter {
width: 100%;
}

// THUMBNAILS
a.thumb {
  display: block;
  
  .img-holder {
    position: relative;
    z-index: 80;
  
    .figcaption {
      display:block;
      position: absolute;
      z-index: -99;
      visibility: hidden;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      padding: 0;
      margin: 0;
      
      span.underline {
        color: $thumbnail_hover_text_color;
        <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
          border-bottom: 1px solid $thumbnail_hover_text_color;
        <?php } else { ?>
          border-bottom: 1px solid transparent;
        <?php } ?>
      }
      
      div {
        position: absolute;
        padding: $thumbnail_text_padding;
      }
      
      div.TopLeft {
        top: 0;
        left: 0;
      }
      div.TopRight {
        top: 0;
        right: 0;
      }
      div.BottomLeft {
        bottom: 0;
        left: 0;
      }
      div.BottomRight {
        bottom: 0;
        right: 0;
      }
      div.Center {
        top: 50%;
        left: 0%;
        text-align: center !important;
        width: 100%;
      }
    }
    
    .figcaption-bg {
      z-index: -1;
      display: none;
      background: $row_item_hover_background_color;
    }
    
    .thumb-hover {
      position: absolute;
      z-index: 90;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      display: none;
    }
    
    .hover-image {
      position: absolute;
      z-index: -1;
      display: block;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    
  } 
  
  .figcaption.stick {
    display:block;
    
    span.underline {
      color: $thumbnail_text_color;
      <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
        border-bottom: 1px solid $thumbnail_text_color;
      <?php } else { ?>
        border-bottom: 1px solid transparent;
      <?php } ?>
    }
  }

}

// ROW thumb adjustments
a.thumb.row-thumb {
  .img-holder {
    .figcaption-bg {
      //z-index: 99;
      //display: block;
    }
    .figcaption {      
      span.underline {
        position: absolute;
        padding: $thumbnail_text_padding;
        color: $row_item_hover_text_color;
        <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
          border-bottom: 0px solid transparent;
          text-decoration: underline;
        <?php } else { ?>
          border-bottom: 0px solid transparent;
        <?php } ?>
      }
    }
  }
}


// Thumb hover
a.thumb.ready.hover, a.thumb.ready.active {
  .img-holder {
    .figcaption {
      z-index: 99;
      visibility: visible;
      display: block;
      
      span.underline {
        color: $thumbnail_hover_text_color;
        <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
          border-bottom: 1px solid $thumbnail_hover_text_color;
        <?php } else { ?>
          border-bottom: 1px solid transparent;
        <?php } ?>
      }
    }
    .figcaption-bg {
      z-index: 90;
      display: block;
    }
    .thumb-hover {
      display: block;
    } 
    .hover-image {
      z-index: 80;
      display: block;
    }
  }
  .figcaption.stick {
    span.underline {
      color: $thumbnail_hover_text_color;
      <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
        border-bottom: 1px solid $thumbnail_hover_text_color;
      <?php } else { ?>
        border-bottom: 1px solid transparent;
      <?php } ?>
    }
  }
}

a.thumb.row-thumb.ready.hover, a.thumb.row-thumb.ready.active {
  .img-holder {
    .figcaption-bg {

    }
    .figcaption {      
      span.underline {
        color: $row_item_hover_text_color;
        <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
          border-bottom: 0px solid transparent;
          text-decoration: underline;
        <?php } else { ?>
          border-bottom: 0px solid transparent;
        <?php } ?>
      }
    }
  }
}


// Desktop Thumbs CSS hovers
body.desktop {
  a.thumb.ready {
    &:hover {
      .img-holder {
        .figcaption {
          z-index: 99;
          visibility: visible;
          display: block;
          
          span.underline {
            color: $thumbnail_hover_text_color;
            <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
              border-bottom: 1px solid $thumbnail_hover_text_color;
            <?php } else { ?>
              border-bottom: 1px solid transparent;
            <?php } ?>
          }
        }
        .figcaption-bg {
          z-index: 90;
          display: block;
        }
        .thumb-hover {
          display: block;
        } 
        .hover-image {
          z-index: 80;
          display: block;
        }
      }
      .figcaption.stick {
        span.underline {
          color: $thumbnail_hover_text_color;
          <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
            border-bottom: 1px solid $thumbnail_hover_text_color;
          <?php } else { ?>
            border-bottom: 1px solid transparent;
          <?php } ?>
        }
      }
    }
  }
  
  a.thumb.row-thumb.ready {
    .img-holder {
      .figcaption-bg {

      }
      .figcaption {      
        span.underline {
          color: $row_item_hover_text_color;
          <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
            border-bottom: 0px solid transparent;
            text-decoration: underline;
          <?php } else { ?>
            border-bottom: 0px solid transparent;
          <?php } ?>
        }
      }
    }
  }
}


// COMMENTS
#comments {  
  .comments-module {
    p {
      padding-right: 0px;
    }
    li {
      //border-bottom: $separator_height_alt solid #050505;
      padding-top: $separator_module_padding_bottom;

      
      &:first-child {
        .separator-module {
          display: none;
        }
      }
      
      &:last-child {
        //border-bottom: 0px solid #050505;
      }
      
      .hires-comment-xtra {
        overflow: auto;
      
        img.avatar {
          width: $small_font_line_height*2 !important;
          height: $small_font_line_height*2 !important;
          max-width: $small_font_line_height*2 !important;
          min-width: $small_font_line_height*2 !important;
          margin-right: $small_font_line_height;
          float: left;
        }
        
        .hires-comment-meta {
          float: left;
        }
      
      }
      
      .edit-link {
        position: absolute;
        right: $grid_gutter;
        z-index: 995;
        -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
        filter: alpha(opacity=50);
        -moz-opacity: 0.5;
        -khtml-opacity: 0.5;
        opacity: 0.5;
        
        .comment-edit-link {
          border-bottom: 0px solid transparent !important;
        }
      }
      
    }
  }
}

// LOAD MORE. SYS.
.loadmore-holder {
overflow: auto;
}
.loadmore {

}
.loadmore a {

}

// NEXT &  PREV (single.php, category internal)
#nextprev {
  overflow: auto;
  clear: left;
  position: relative;
  
  a.next {
    float: left;
    text-align: left;
  }
  a.prev {
    float: right;
    text-align: right;
  }
  
  // If 'Fixed' is set 
  a.next-fixed {
    position: fixed;
    left:0px;
    top:50%;
    background: $text_color;
    color: $site_background_color;
    padding: 5px;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-right: 8px;
    padding-left: 5px;
    z-index: 997;
    border-bottom: 0px solid transparent;
    -webkit-transition: all .2s ease; -moz-transition: all .2s ease; transition: all .2s ease;
    display: none;
    
    &:hover {
      padding-left: 20px;
    }
    
  }
  a.prev-fixed {
    position: fixed;
    right:0px;
    top:50%;
    background: $text_color;
    color: $site_background_color;
    padding: 5px;
    padding-top: 15px;
    padding-bottom: 15px;
    padding-left: 8px;
    padding-right: 5px;
    z-index: 997;
    border-bottom: 0px solid transparent;
    -webkit-transition: all .2s ease; -moz-transition: all .2s ease; transition: all .2s ease;
    display: none;
    
    &:hover {
      padding-right: 20px;
    }
    
  }
}

// Next & prev (on taxonomies)
#nextprev-page a {

}


/* Columns */

// Column float default
.col {
float:left;
}

// Full width responsive images
.col img {
width:100%;
min-width: 100%;
height:auto;
}
// Add class 'no-scale' to not scale responsively
.col img.no-scale {
min-width: 0% !important;
max-width: 100% !important;
width: auto !important;
height: auto !important;
}

// Grid gutter
.col-inner-hori {
margin-right: $grid_gutter;
margin-left: $grid_gutter;
overflow: auto;
}
.col-inner {
margin: $grid_gutter;
overflow: auto;
}

// Modern version of the .col-inner
.col-padd {
padding: $grid_gutter;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}
// Modern version of the .col-inner-hori
.col-padd-hori {
padding: $grid_gutter;
padding-top: 0px;
padding-bottom: 0px;
-moz-box-sizing: border-box;
-webkit-box-sizing: border-box;
box-sizing: border-box;
}

.col {
  overflow: hidden;
  .col-inner, .col-inner-hori {
    overflow: hidden;
  }
}

// Column widths
.col-12 {
width:12.5%;
}

.col-16 {
width:16.666%;
}

.col-20 {
width:20%;
}

.col-25 {
width:25%;
}

.col-33 {
width:33.333%;
}

.col-40 {
width:40%;
}

.col-50 {
width:50%;
}

.col-60 {
width:60%;
}

.col-66 {
width:66.666%;
}

.col-75 {
width:75%;
}

.col-80 {
width:80%;
}

.col-100 {
width:100%;
}

// Column pushes
.push-12 {
margin-left: 12.5%;
}
.push-20 {
margin-left: 20%;
}
.push-25 {
margin-left: 25%;
}
.push-33 {
margin-left: 33.333%;
}
.push-40 {
margin-left: 40%;
}
.push-50 {
margin-left: 50%;
}
.push-60 {
margin-left: 50%;
}
.push-66 {
margin-left: 66.666%;
}
.push-75 {
margin-left: 75%;
}
.push-80 {
margin-left: 75%;
}


/* Typography - Fonts */

.capitalize {
text-transform: capitalize;
}

h1, h2, h3, h4, h5, h6 {
margin: 0;
padding: 0;
font-weight: 400;
}

body, #content, .normal, .default, h1, h2, h3, h4, h5, h6, input, textarea, button, select {
font-family: $default_font;
font-size: $default_font_size;
line-height: $default_font_line_height;
}
.small {
font-family: $small_font;
font-size: $small_font_size;
line-height: $small_font_line_height;
}
.large {
font-family: $large_font;
font-size: $large_font_size;
line-height: $large_font_line_height;
}
.huge {
font-family: $huge_font;
font-size: $huge_font_size;
line-height: $huge_font_line_height;
}

// Line Breaks
#wrap {
  
    // Universal Break
  .small.lb {
    margin-bottom: $small_font_line_height;
  }
  .default.lb {
    margin-bottom: $default_font_line_height;
  }
  .large.lb {
    margin-bottom: $large_font_line_height;
  }
  .huge.lb {
    margin-bottom: $huge_font_line_height;
  }
  
  // Breaks for all sizes
    // Small
  .small.lb-0-1 {
    margin-bottom: $small_font_line_height / 10;
  }
  .small.lb-0-25 {
    margin-bottom: $small_font_line_height / 4;
  }
  .small.lb-0-5 {
    margin-bottom: $small_font_line_height / 2;
  }
  .small.lb-1 {
    margin-bottom: $small_font_line_height;
  }
  .small.lb-1-5 {
    margin-bottom: $small_font_line_height * 1.5;
  }
  .small.lb-2 {
    margin-bottom: $small_font_line_height * 2;
  }
  .small.lb-2-5 {
    margin-bottom: $small_font_line_height * 2.5;
  }
  .small.lb-3 {
    margin-bottom: $small_font_line_height * 3;
  }  
    // Default
  .default.lb-0-1 {
    margin-bottom: $default_font_line_height / 10;
  }
  .default.lb-0-25 {
    margin-bottom: $default_font_line_height / 4;
  }
  .default.lb-0-5 {
    margin-bottom: $default_font_line_height / 2;
  }
  .default.lb-1 {
    margin-bottom: $default_font_line_height;
  }
  .default.lb-1-5 {
    margin-bottom: $default_font_line_height * 1.5;
  }
  .default.lb-2 {
    margin-bottom: $default_font_line_height * 2;
  }
  .default.lb-2-5 {
    margin-bottom: $default_font_line_height * 2.5;
  }
  .default.lb-3 {
    margin-bottom: $default_font_line_height * 3;
  }
    // Large
  .large.lb-0-1 {
    margin-bottom: $large_font_line_height / 10;
  }
  .large.lb-0-25 {
    margin-bottom: $large_font_line_height / 4;
  }
  .large.lb-0-5 {
    margin-bottom: $large_font_line_height / 2;
  }
  .large.lb-1 {
    margin-bottom: $large_font_line_height;
  }
  .large.lb-1-5 {
    margin-bottom: $large_font_line_height * 1.5;
  }
  .large.lb-2 {
    margin-bottom: $large_font_line_height * 2;
  }
  .large.lb-2-5 {
    margin-bottom: $large_font_line_height * 2.5;
  }
  .large.lb-3 {
    margin-bottom: $large_font_line_height * 3;
  }
    // Huge
  .huge.lb-0-1 {
    margin-bottom: $huge_font_line_height / 10;
  }
  .huge.lb-0-25 {
    margin-bottom: $huge_font_line_height / 4;
  }
  .huge.lb-0-5 {
    margin-bottom: $huge_font_line_height / 2;
  }
  .huge.lb-1 {
    margin-bottom: $huge_font_line_height;
  }
  .huge.lb-1-5 {
    margin-bottom: $huge_font_line_height * 1.5;
  }
  .huge.lb-2 {
    margin-bottom: $huge_font_line_height * 2;
  }
  .huge.lb-2-5 {
    margin-bottom: $huge_font_line_height * 2.5;
  }
  .huge.lb-3 {
    margin-bottom: $huge_font_line_height * 3;
  }
}

/*
// PARAGRAPHS
#content {
  p.small {
    font-family: $small_font;
    font-size: $small_font_size;
    line-height: $small_font_line_height;
    margin-bottom: 0;
  }
}
#content {
  p.default {
    font-family: $default_font;
    font-size: $default_font_size;
    line-height: $default_font_line_height;
    margin-bottom: 0;
  }
}
#content {
  p.large {
    font-family: $large_font;
    font-size: $large_font_size;
    line-height: $large_font_line_height;
    margin-bottom: 0;
  }
}
#content {
  p.huge {
    font-family: $huge_font;
    font-size: $huge_font_size;
    line-height: $huge_font_line_height;
    margin-bottom: 0;
  }
}
*/

.uppercase {
  text-transform: uppercase;
}

.icons, .flex-next, .flex-prev, .bx-wrapper .bx-controls-direction a {
  font-family: 'hi-response_webicons';
}

/***
ADMIN Edits 
***/
a.post-edit-link {
color: #ff5555;
border-bottom: 0px solid #ff5555 !important;
}
a.post-edit-link:hover {
color: #ff0000;
border-bottom: 0px solid #ff0000 !important;
}

/***
ERRORS 
***/
.error {
background: #ffeeee;
color: #ff5555;
}

/***
Page loader
***/
#pageloader {
background: $loader_color;
position: fixed;
left: 50%;
top: 50%;
z-index: 9998;
display: none;
width: 40px;
height: 40px;
margin-top: -20px;
margin-left: -20px;
}

#pageloader.Type-1 {
padding:0;
overflow:visible;
width: 40px;
height: 40px;
margin-top: -20px;
margin-left: -20px;
-moz-border-radius: 20px;
-webkit-border-radius: 20px;
border-radius: 20px;
}

#pageloader.Type-2 {
width: 20px;
height: 20px;
margin-top: -10px;
margin-left: -10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
}

#pageloader.Type-3 {
width: 40px;
height: 40px;
margin-top: -20px;
margin-left: -20px;
}

#pageloader.Type-4 {
width: 20px;
height: 20px;
margin-top: -10px;
margin-left: -10px;
}

#pageloader.Type-5 {
width: auto;
height: auto;
margin-left: 0;
margin-top: 0;
text-align: center;
background: transparent;
}


/***
IMG Preloads 
***/
.slide-spinn {
background: $loader_color;
position: absolute;
width: 20px;
height: 20px;
top: 50%;
left: 50%;
margin-top: -10px;
margin-left: -10px;
-moz-border-radius: 10px;
-webkit-border-radius: 10px;
border-radius: 10px;
z-index: 99;
}

/***
Link fades
***/
a {
-webkit-transition: all 0s ease-in-out;  /* Saf3.2+, Chrome */
-moz-transition: all 0s ease-in-out;  /* FF4+ */
-ms-transition: all 0s ease-in-out;  /* IE10? */
-o-transition: all 0s ease-in-out;  /* Opera 10.5+ */
transition: all 0s ease-in-out;
}

/***
Forms
***/

input, textarea, select {
margin: 0;
padding: 0;
width: 100%;
outline:none;
margin-bottom: $forms_margin_bottom;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: $forms_padding;
text-align: left;
-webkit-appearance: none;
border: $forms_border_width solid $forms_border_color;
width:100%;
background: $forms_background_color;
color: $forms_text_color;
-moz-border-radius: 0px;
-webkit-border-radius: 0px;
border-radius: 0px;
}

input:focus, textarea:focus, select:focus {
border: $forms_border_width solid $forms_focus_border_color;
}

input[type="checkbox"], input[type="radio"] {
margin-bottom: 0;
width: auto;
height: auto;
background: none;
margin-left: 2px;
margin-right: 10px;
}

input[type="checkbox"] {
-webkit-appearance: checkbox;
}

input[type="radio"] {
-webkit-appearance: radio;
}

button, input[type="submit"] {
margin: 0;
border: 0;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: $forms_padding;
cursor: pointer;
display: inline;
width: auto;
text-align: left;
background: $button_background_color;
border: $forms_border_width solid $button_background_color;
color: $button_text_color;
clear: both !important;
margin-bottom: $forms_margin_bottom;
}

button:hover, input[type="submit"]:hover {
background: $button_hover_background_color;
border: $forms_border_width solid $button_hover_background_color;
color: $button_hover_text_color;
}

// Input Placeholder Color (placeholder's becoming standard..)
::-webkit-input-placeholder {
color: $text_color;
opacity: 0.5;
}
:-moz-placeholder {
color: $text_color;
-moz-opacity: 0.5;
opacity: 0.5;
}
:-ms-input-placeholder {
color: $text_color;
-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
filter: alpha(opacity=50);
opacity: 0.5;
}

label {
display: block;
width: 100%;
}



/*
 * jQuery FlexSlider v2.0
 * http://www.woothemes.com/flexslider/
 *
 * Copyright 2012 WooThemes
 * Free to use under the GPLv2 license.
 * http://www.gnu.org/licenses/gpl-2.0.html
 *
 * Contributing author: Tyler Smith (@mbmufffin)
 */

 
/* Browser Resets */
.flex-container a:active,
.flexslider a:active,
.flex-container a:focus,
.flexslider a:focus  {outline: none;}
.slides,
.flex-control-nav,
.flex-direction-nav {margin: 0; padding: 0; list-style: none;} 
.flexslider p {padding: 0;}

/* FlexSlider Necessary Styles
*********************************/ 
.flexslider {margin: 0; padding: 0;overflow: hidden; background: $media_loader_bg_color;}
.flexslider .slides {overflow: hidden;}
/* Hide the slides before the JS is loaded. Avoids image jumping */
.flexslider .slides > li {display: none; -webkit-backface-visibility: hidden;}
.flexslider .slides img {width: 100%; display: block;}
.flex-pauseplay span {text-transform: capitalize;}

/* Clearfix for the .slides element */
.slides:after {content: "."; display: block; clear: both; visibility: hidden; line-height: 0; height: 0;} 
html[xmlns] .slides {display: block;} 
* html .slides {height: 1%;}

/* No JavaScript Fallback */
/* If you are not using another script, such as Modernizr, make sure you
 * include js that eliminates this class on page load */
.no-js .slides > li:first-child {display: block;}


/* FlexSlider Default Theme
*********************************/
.flexslider {margin: 0; position: relative; zoom: 1;}
.flex-viewport {max-height: 2000px; -webkit-transition: all 1s ease; -moz-transition: all 1s ease; transition: all 1s ease;}
.loading .flex-viewport {max-height: 300px;}
.flexslider .slides {zoom: 1;}
.carousel li {}

/* Caption */
.flexslider .flex-caption {
position: absolute;
z-index: 99;
bottom: -100px;
width: 100%;
-webkit-box-sizing: border-box;
-moz-box-sizing: border-box;
box-sizing: border-box;
padding: 20px;
padding-bottom: 18px;
-webkit-transition: all .3s ease; -moz-transition: all .3s ease; transition: all .3s ease;
}

.flexslider .flex-caption.align-left {
left: 0px;
}
.flexslider .flex-caption.align-center {
left: 0px;
}
.flexslider .flex-caption.super-center {
left: 25%;
width: 50%;
text-align: center;
opacity: 0;
bottom: 50%;
}

.flexslider .flex-caption.align-right {
left: 0px;
padding-right: 20px !important;
}
.flexslider:hover .flex-caption.align-left, .flexslider:hover .flex-caption.align-right {
bottom: 0px;
}
.flexslider:hover .flex-caption.align-center {
bottom: 25px;
}
.flexslider:hover .flex-caption.super-center {
bottom: 50%;
opacity: 1;
}

/* Direction Nav */
.flex-direction-nav {*height: 0;}
.flex-direction-nav a {margin: 0; display: block; position: absolute; top: 50%; z-index: 55; cursor: pointer; -webkit-transition: all .3s ease; -moz-transition: all .3s ease; transition: all .3s ease; text-decoration: none !important; border-bottom: 0px !important;}
.flex-direction-nav .flex-next {right: -100px !important; text-align: right;}
.flex-direction-nav .flex-prev {left: -100px !important;}
.flex-direction-nav .flex-next, .flex-direction-nav .flex-prev, .flexslider .flex-caption {color: $text_color;}
.flexslider:hover .flex-next {right: 20px !important;}
.flexslider:hover .flex-prev {left: 20px !important;}
.flexslider:hover .flex-next:hover, .flexslider:hover .flex-prev:hover {
    -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
    filter: alpha(opacity=100);
    -moz-opacity: 1;
    -khtml-opacity: 1;
    opacity: 1;
}
.flex-direction-nav .flex-disabled {cursor: default;}

/* Control Nav */
.flex-control-nav {margin: 0; padding:0;font-size:0px !important;
	line-height: 0px !important;width: 100%; position: absolute; bottom: -100px; text-align: center;-webkit-transition: all .3s ease; -moz-transition: all .3s ease; transition: all .3s ease;}
.flexslider:hover .flex-control-nav {bottom: 20px;}
.flex-control-nav li {margin: 0; padding:0; display: inline-block; zoom: 1; *display: inline;}
.flex-control-paging li a {
  margin: 0;
  padding: 0;
  width: 14px; 
  height: 14px; 
  -moz-border-radius: 7px;
  -webkit-border-radius: 7px;
  border-radius: 7px;
	margin-left: 3px;
	margin-right: 3px;
  display: block; 
  cursor: pointer;
	font-size:0px !important;
	line-height: 0px !important;
	overflow: hidden;
	background: $text_color;
  -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
  filter: alpha(opacity=50);
  -moz-opacity: 0.5;
  -khtml-opacity: 0.5;
  opacity: 0.5;
	border-bottom: 0px !important;
}

.flex-control-paging li a:hover {}
.flex-control-paging li a.flex-active {cursor: default; -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)"; filter: alpha(opacity=100); -moz-opacity: 1; -khtml-opacity: 1; opacity: 1;}

// Flicker fix
.flexslider .slides > li {position: relative;}




/* PACKERY */

/* ISOTOPE */

/* RETINA */
@media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3 / 2), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5) {

  #header-inner {
    #logo-h1 {
      height: $logo_height; 
      
      #logo-image {
        background: transparent url($logo_retina) no-repeat !important;
        background-size: $logo_width $logo_height !important;
      }
    }
  }
  
}


/* Media Queries */

@media all and (min-width: 1801px) {
  <?php if($main_menu_type == 'Toggle') { ?>
  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } else { ?>
  #toggle-menu {
    display: none !important;
  }
  <?php } ?>
  #toggle-menu {
    #toggle-menu-inner {
      .menu-item {
        width: $toggle_menu_items_width;
      }
    }
  }
  #nextprev.fixxed {
    padding-bottom: 0px;
  }
}

@media all and (max-width: 1800px) and (min-width: 1401px) {
  <?php if($main_menu_type == 'Toggle') { ?>
  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } else { ?>
  #toggle-menu {
    display: none !important;
  }
  <?php } ?>
  
  #toggle-menu {
    #toggle-menu-inner {
      .menu-item {
        width: $toggle_menu_items_width;
      }
    }
  }
  
  #nextprev.fixxed {
    padding-bottom: 0px;
  }
}

@media all and (max-width: 1400px) and (min-width: 1201px) {
  <?php if($main_menu_type == 'Toggle') { ?>
  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } else { ?>
  #toggle-menu {
    display: none !important;
  }
  <?php } ?>
  
  #toggle-menu {
    #toggle-menu-inner {
      .menu-item {
        width: $toggle_menu_items_width;
      }
    }
  }
  #nextprev.fixxed {
    padding-bottom: 0px;
  }
}

@media all and (max-width: 1200px) and (min-width: 801px) {
  #menu-holder #menu-main-menu .menu-item, #menu-holder .page_item, #menu-holder.wide #menu-main-menu .menu-item, #menu-holder.wide .page_item  {
    width: 50%;
  }
    #menu-holder.float-right #menu-main-menu .menu-item, #menu-holder.float-right .page_item, #menu-holder.float-left #menu-main-menu .menu-item, #menu-holder.float-left .page_item  {
    width: auto;
  }
  <?php if($main_menu_type == 'Toggle') { ?>
  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } else { ?>
  #toggle-menu {
    display: none !important;
  }
  <?php } ?>
  .empty {
    display: none;
  }
  #toggle-menu-inner, #secondary_menu_holder {
    .menu-item {
      width: 25% !important;
    }
    .menu-item:nth-child(5n+5) {
      clear: both;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #section_menu_holder {
    .menu-item {
      width: 25% !important;
    }
    .menu-item:nth-child(5n+5) {
      clear: both;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #nextprev.fixxed {
    padding-bottom: 0px;
  }
}

@media all and (max-width: 800px) and (min-width: 601px) {
  #menu-holder #menu-main-menu .menu-item, #menu-holder .page_item, #menu-holder.wide #menu-main-menu .menu-item, #menu-holder.wide .page_item  {
    width: 50%;
  }
  #menu-holder.float-right #menu-main-menu .menu-item, #menu-holder.float-right .page_item, #menu-holder.float-left #menu-main-menu .menu-item, #menu-holder.float-left .page_item  {
    width: auto;
  }
  #content {
    .col-80, .col-75, .col-66, .col-60, .col-50 {
      width: 100%;
    }
    .col-12, .col-16, .col-20, .col-25, .col-33, .col-40 {
      width: 50%;
    }
    .push-12, .push-20, .push-25, .push-33, .push-40, .push-50, .push-60, .push-66, .push-75, .push-80 {
      margin-left: 0px;
    }
  }
  
  #footer {
    .col-80, .col-75, .col-66, .col-60, .col-50 {
      width: 100%;
    }
    .col-12, .col-16, .col-20, .col-25, .col-33, .col-40 {
      width: 50%;
    }
    .push-12, .push-20, .push-25, .push-33, .push-40, .push-50, .push-60, .push-66, .push-75, .push-80 {
      margin-left: 0px;
    }
    
    .col:nth-child(odd) {
      clear: both;
    }
  }
  
  .text-module {
    .col-inner {
      padding-top: 0px;
      padding-bottom: 0px;
      margin-top: 0px;
      margin-bottom: 0px;
    }
  }

  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  
  <?php if($main_menu_type == 'None') { ?>
  #menu-icon {
    display: none;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } ?>

  .small-device-hide {
    display: none;
  }
  button, input[type="submit"] {
    width:100%;
  }
  #content p {
    padding-right: 0px;
  }
  #border-left, #border-right {
    display: none;
  }
  .empty {
    display: none;
  }
  #toggle-menu-inner, #secondary_menu_holder {
    .menu-item {
      width: 50% !important;
    }
    .menu-item:nth-child(2n+3) {
      clear: both;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #section_menu_holder {
    .menu-item {
      width: 50% !important;
    }
    .menu-item:nth-child(2n+3) {
      clear: both;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #nextprev {
  
    // If 'Fixed' is set 
    a.next-fixed {
      position: static;
      float: left;
      margin-top: 0px !important;
      padding-top: 5px;
      padding-bottom: 6px;
      padding-left: 14px;
      padding-right: 16px;
      
      margin-left: $grid_gutter;
      
      &:hover {
        padding-left: 14px;
      }
      
    }
    a.prev-fixed {
      position: static;
      float: right;
      margin-top: 0px !important;
      padding-top: 5px;
      padding-bottom: 6px;
      padding-left: 16px;
      padding-right: 14px;
      
      margin-right: $grid_gutter;
      
      &:hover {
        padding-right: 14px;
      }
      
    }
  
  }

}

@media all and (max-width: 600px) and (min-width: 0px) {
  #menu-holder #menu-main-menu .menu-item, #menu-holder .page_item, #menu-holder.wide #menu-main-menu .menu-item, #menu-holder.wide .page_item  { 
    width: 100%;
  }
  #menu-holder.float-right #menu-main-menu .menu-item, #menu-holder.float-right .page_item, #menu-holder.float-left #menu-main-menu .menu-item, #menu-holder.float-left .page_item  {
    width: auto;
  }

  #content {
    .col-80, .col-75, .col-66, .col-60, .col-50 {
      width: 100%;
    }
    .col-12, .col-16, .col-20, .col-25, .col-33, .col-40 {
      width: 50%;
    }
    .push-12, .push-20, .push-25, .push-33, .push-40, .push-50, .push-60, .push-66, .push-75, .push-80 {
      margin-left: 0px;
    }
  }
  
  #footer {
    .col-80, .col-75, .col-66, .col-60, .col-50 {
      width: 100%;
    }
    .col-12, .col-16, .col-20, .col-25, .col-33, .col-40 {
      width: 50%;
    }
    .push-12, .push-20, .push-25, .push-33, .push-40, .push-50, .push-60, .push-66, .push-75, .push-80 {
      margin-left: 0px;
    }
    
    .col:nth-child(odd) {
      clear: both;
    }
  }

  .text-module {
    .col-inner {
      padding-top: 0px;
      padding-bottom: 0px;
      margin-top: 0px;
      margin-bottom: 0px;
    }
  }
  
  #menu-icon {
    display:block;
  }
  #menu-main-menu {
    display: none;
  }
  <?php if($main_menu_type == 'None') { ?>
  #menu-icon {
    display: none;
  }
  #menu-main-menu {
    display: none;
  }
  <?php } ?>
  
  .small-device-hide {
    display: none;
  }
  
  button, input[type="submit"] {
    width:100%;
  }
  
  #content p {
    padding-right: 0px;
  }
  
  #border-left, #border-right {
    display: none;
  }
  .empty {
    display: none;
  }
  #toggle-menu-inner, #secondary_menu_holder {
    .menu-item {
      width: 50% !important;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #section_menu_holder {
    .menu-item {
      width: 100% !important;
    }
    ul.sub-menu .menu-item {
      width: 100% !important;
    }
  }
  #nextprev {
  
    // If 'Fixed' is set 
    a.next-fixed {
      position: static;
      float: left;
      margin-top: 0px !important;
      padding-top: 5px;
      padding-bottom: 6px;
      padding-left: 14px;
      padding-right: 16px;
      
      margin-left: $grid_gutter;
      
      &:hover {
        padding-left: 14px;
      }
      
    }
    a.prev-fixed {
      position: static;
      float: right;
      margin-top: 0px !important;
      padding-top: 5px;
      padding-bottom: 6px;
      padding-left: 16px;
      padding-right: 14px;
      
      margin-right: $grid_gutter;
      
      &:hover {
        padding-right: 14px;
      }
      
    }
  
  }
  
  
}









// MOBILE

body.mobile {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  
  #block {height: 120% !important;}
  
  // Mobile captions
  .figcaption {
    padding: $mobile_caption_padding;
  }
  .blog-module {
    .figcaption, p, .blog-link {
      padding-left: 0px !important;
      padding-right: 0px !important;
    }
  }
  .row-holder .row .row-item .img-holder {
    .figcaption {
      padding: 0;
    }
  }

  // Row Module = Mobile item height override
  .row-module {
    .row {
      .row-item {
        .img-holder {
          height: 60px;
          img {
            height: 60px;
          }
        }
      }
    }
  }
  
  // Modules padding top
  .module.mpt-lb-0, .stack.smt-lb-0 {
    padding-top: ($mobile_default_font_line_height * 0)px;
  }
  .module.mpt-lb-0-5, .stack.smt-lb-0-5 {
    padding-top: ($mobile_default_font_line_height * 0.5)px;
  }
  .module.mpt-lb-1, .stack.smt-lb-1 {
    padding-top: ($mobile_default_font_line_height * 1)px;
  }
  .module.mpt-lb-1-5, .stack.smt-lb-1-5 {
    padding-top: ($mobile_default_font_line_height * 1.5)px;
  }
  .module.mpt-lb-2, .stack.smt-lb-2 {
    padding-top: ($mobile_default_font_line_height * 2)px;
  }
  .module.mpt-lb-2-5, .stack.smt-lb-2-5 {
    padding-top: ($mobile_default_font_line_height * 2.5)px;
  }
  .module.mpt-lb-3, .stack.smt-lb-3 {
    padding-top: ($mobile_default_font_line_height * 3)px;
  }
  
  // Modules padding bottom
  .module.mpb-lb-0, .stack.smb-lb-0 {
    padding-bottom: ($mobile_default_font_line_height * 0)px;
  }
  .module.mpb-lb-0-5, .stack.smb-lb-0-5 {
    padding-bottom: ($mobile_default_font_line_height * 0.5)px;
  }
  .module.mpb-lb-1, .stack.smb-lb-1 {
    padding-bottom: ($mobile_default_font_line_height * 1)px;
  }
  .module.mpb-lb-1-5, .stack.smb-lb-1-5 {
    padding-bottom: ($mobile_default_font_line_height * 1.5)px;
  }
  .module.mpb-lb-2, .stack.smb-lb-2 {
    padding-bottom: ($mobile_default_font_line_height * 2)px;
  }
  .module.mpb-lb-2-5, .stack.smb-lb-2-5 {
    padding-bottom: ($mobile_default_font_line_height * 2.5)px;
  }
  .module.mpb-lb-3, .stack.smb-lb-3 {
    padding-bottom: ($mobile_default_font_line_height * 3)px;
  }

  // Index module
  .index-module {
    .index-item-inner {
      padding-top: $mobile_index_item_padding_top;
      padding-bottom: $mobile_index_item_padding_bottom;
    }
  }
  
  // Footer
  #footer-inner {
    padding-top: $mobile_footer_padding_top;
    padding-bottom: $mobile_footer_padding_bottom;
  }
  
  // Mobile '.small' font override
  .small {
    font-size: $mobile_small_font_size !important;
    line-height: $mobile_small_font_line_height !important;
  }
  
  // Mobile '.default' font override
  #content, .normal, .default, h1, h2, h3, h4, h5, h6, input, textarea, button, select {
    font-size: $mobile_default_font_size !important;
    line-height: $mobile_default_font_line_height !important;
  }
  
  // Mobile '.large' font override
  .large {
    font-size: $mobile_large_font_size !important;
    line-height: $mobile_large_font_line_height !important;
  }
  
  // Mobile '.huge' font override
  .huge {
    font-size: $mobile_huge_font_size !important;
    line-height: $mobile_huge_font_line_height !important;
  }
  
  #wrap {

    .small.lb {
      margin-bottom: $mobile_small_font_line_height;
    }    
    .small.lb-0-1 {
      margin-bottom: $mobile_small_font_line_height / 10;
    }
    .small.lb-0-25 {
      margin-bottom: $mobile_small_font_line_height / 4;
    }
    .small.lb-0-5 {
      margin-bottom: $mobile_small_font_line_height / 2;
    }
    .small.lb-1 {
      margin-bottom: $mobile_small_font_line_height;
    }
    .small.lb-1-5 {
      margin-bottom: $mobile_small_font_line_height * 1.5;
    }
    .small.lb-2 {
      margin-bottom: $mobile_small_font_line_height * 2;
    }
    .small.lb-2-5 {
      margin-bottom: $mobile_small_font_line_height * 2.5;
    }
    .small.lb-3 {
      margin-bottom: $mobile_small_font_line_height * 3;
    }

    .default.lb {
      margin-bottom: $mobile_default_font_line_height;
    }   
    .default.lb-0-1 {
      margin-bottom: $mobile_default_font_line_height / 10;
    } 
    .default.lb-0-25 {
      margin-bottom: $mobile_default_font_line_height / 4;
    }
    .default.lb-0-5 {
      margin-bottom: $mobile_default_font_line_height / 2;
    }
    .default.lb-1 {
      margin-bottom: $mobile_default_font_line_height;
    }
    .default.lb-1-5 {
      margin-bottom: $mobile_default_font_line_height * 1.5;
    }
    .default.lb-2 {
      margin-bottom: $mobile_default_font_line_height * 2;
    }
    .default.lb-2-5 {
      margin-bottom: $mobile_default_font_line_height * 2.5;
    }
    .default.lb-3 {
      margin-bottom: $mobile_default_font_line_height * 3;
    }
    
    .large.lb {
      margin-bottom: $mobile_large_font_line_height;
    }    
    .large.lb-0-1 {
      margin-bottom: $mobile_large_font_line_height / 10;
    }
    .large.lb-0-25 {
      margin-bottom: $mobile_large_font_line_height / 4;
    }
    .large.lb-0-5 {
      margin-bottom: $mobile_large_font_line_height / 2;
    }
    .large.lb-1 {
      margin-bottom: $mobile_large_font_line_height;
    }
    .large.lb-1-5 {
      margin-bottom: $mobile_large_font_line_height * 1.5;
    }
    .large.lb-2 {
      margin-bottom: $mobile_large_font_line_height * 2;
    }
    .large.lb-2-5 {
      margin-bottom: $mobile_large_font_line_height * 2.5;
    }
    .large.lb-3 {
      margin-bottom: $mobile_large_font_line_height * 3;
    }
    
    .huge.lb {
      margin-bottom: $mobile_huge_font_line_height;
    }    
    .huge.lb-0-1 {
      margin-bottom: $mobile_huge_font_line_height / 10;
    }
    .huge.lb-0-25 {
      margin-bottom: $mobile_huge_font_line_height / 4;
    }
    .huge.lb-0-5 {
      margin-bottom: $mobile_huge_font_line_height / 2;
    }
    .huge.lb-1 {
      margin-bottom: $mobile_huge_font_line_height;
    }
    .huge.lb-1-5 {
      margin-bottom: $mobile_huge_font_line_height * 1.5;
    }
    .huge.lb-2 {
      margin-bottom: $mobile_huge_font_line_height * 2;
    }
    .huge.lb-2-5 {
      margin-bottom: $mobile_huge_font_line_height * 2.5;
    }
    .huge.lb-3 {
      margin-bottom: $mobile_huge_font_line_height * 3;
    }
    
  }
  
  // Remove site border (if turned on)
  #border-left, #border-right {
    display: none;
  }
  
  // Forms
  input, textarea, select {
    border: $mobile_forms_border_width solid $forms_border_color;
  }
  input:focus, textarea:focus, select:focus {
    border: $mobile_forms_border_width solid $forms_focus_border_color;
  }
  button, input[type="submit"] {
    border: $mobile_forms_border_width solid $button_background_color;
  }
  button:hover, input[type="submit"]:hover {
    border: $mobile_forms_border_width solid $button_hover_background_color;
  }
  
  // Toogle Menu
  #toggle-menu {
    #toggle-menu-inner {
      padding-left: $mobile_site_margin_left;
      padding-right: $mobile_site_margin_left;
    }
  }
  
  // Toogle Menu Static
  #toggle-menu.static {
    #toggle-menu-inner {
      margin-left: 0;
      margin-right: 0;
      padding-left: $mobile_site_margin_left;
      padding-right: $mobile_site_margin_right;
    }
  }
  
  #toggle-menu {
    #toggle-menu-inner {
      ul {
        li {
          a {
            padding-top: $mobile_menu_items_padding_top;
            padding-bottom: $mobile_menu_items_padding_bottom;
          }
        }
      } 
    }
  }
  
  #wrap {
    margin-left: $mobile_site_margin_left;
    margin-right: $mobile_site_margin_right;
    padding-top: $mobile_site_margin_top;
    margin-bottom: $mobile_site_margin_bottom;
    
    #header {
      border-bottom: <?php echo $mobile_header_border; ?>px solid $borders_color;
      position: absolute;
      left: 0px;
      width: 100%;
      
      #header-inner {
        padding: 0;
        overflow: auto;
        padding-left: $mobile_site_margin_left !important;
        padding-right: $mobile_site_margin_right !important;
        
        .separator-module {
          display: none;
        }
        
        #logo-text-h1 {
          margin-top: $mobile_header_top_padding;
          margin-bottom: $mobile_header_bottom_padding;
        }

        #logo-h1 {
          height: $mobile_logo_height;
            
          #logo-image {
            height: $mobile_logo_height;
            width: $mobile_logo_width;
            margin-top: $mobile_header_top_padding;
            margin-bottom: 0;
            position: absolute;
            background: transparent url($logo_retina) no-repeat !important;
            background-size: $mobile_logo_width $mobile_logo_height !important;
          }
        }
        
        #menu-holder {  
          #menu-main-menu {
            margin-top: $mobile_header_top_padding;
            margin-bottom: $mobile_header_bottom_padding;
          }        
          #menu-icon {
            padding-top: $mobile_header_top_padding;
            padding-bottom: $mobile_header_bottom_padding;
            padding-left: $mobile_menu_icon_padding_left;
            padding-right: $mobile_menu_icon_padding_right;
            border-left: <?php echo $mobile_header_border; ?>px solid $borders_color;
            border-bottom: 0px !important;
            margin-right: 0px !important;
            
            &:hover {
              border-bottom: 0px !important;
            }
            
          }
        }
        
      }
    }
    
    #header.fixed {
      position: fixed;
    }
    
    #content {
    
      margin-top: $mobile_header_bottom_margin;
      
      .flexslider {
        .flex-control-paging {
          bottom: 10px;
          
          a {
            width: 10px; 
            height: 10px; 
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;
          	margin-left: 2px;
          	margin-right: 2px;
          }
        }
        .flex-caption {
          bottom: 0px;
          padding: 9px;
        }
        .flex-caption.align-left, .flex-caption.align-right {
          bottom: 0px;
        }
        .flex-caption.align-center {
          bottom: 18px;
        }
      }
      
    }
    
  }

}



// TABLET

body.tablet {
  -webkit-tap-highlight-color: rgba(0,0,0,0);
  
  // Row Module = Mobile item height override
  .row-module {
    .row {
      .row-item {
        .img-holder {
          height: 120px;
          img {
            height: 120px;
          }
        }
      }
    }
  } 
  
  #border-left, #border-right {
    display: none;
  }
  
  // Toogle Menu
  #toggle-menu {
    #toggle-menu-inner {
      padding-left: $tablet_site_margin_left;
      padding-right: $tablet_site_margin_left;
    }
  }
  
  // Toogle Menu Static
  #toggle-menu.static {
    z-index: 1;
    #toggle-menu-inner {
      margin-left: 0;
      margin-right: 0;
      padding-left: $tablet_site_margin_left;
      padding-right: $tablet_site_margin_right;
    }
  }
  
  #wrap {
    margin-left: $tablet_site_margin_left;
    margin-right: $tablet_site_margin_right;
    
    #header {
      border-bottom: <?php echo $tablet_header_border; ?>px solid $borders_color;
      position: absolute;
      left: 0px;
      width: 100%;
      
      #header-inner {
        
        .separator-module {
          display: none;
        }
        
        padding: 0;
        overflow: auto;
        padding-left: $tablet_site_margin_left !important;
        padding-right: $tablet_site_margin_right !important;
        
        #logo-text-h1 {
          margin-top: $tablet_header_top_padding;
          margin-bottom: $tablet_header_bottom_padding;
        }
        
        #logo-h1 {
          #logo-image {
            height: $tablet_logo_height;
            width: $tablet_logo_width;
            margin-top: $tablet_header_top_padding;
            margin-bottom: 0;
            position: absolute;
            background: transparent url($logo_retina) no-repeat !important;
            background-size: $tablet_logo_width $tablet_logo_height !important;
          }
        }
        
        #menu-holder {  
          #menu-main-menu {
            margin-top: $tablet_header_top_padding;
            margin-bottom: $tablet_header_bottom_padding;
          }        
          #menu-icon {
            padding-top: $tablet_header_top_padding;
            padding-bottom: $tablet_header_bottom_padding;
            padding-left: $tablet_menu_icon_padding_left;
            padding-right: $tablet_menu_icon_padding_right;
            border-left: <?php echo $tablet_header_border; ?>px solid $borders_color;
            border-bottom: 0px !important;
            margin-right: 0px !important;
            
            &:hover {
              border-bottom: 0px !important;
            }
            
          }
        }
        
      }
    }
    
    #header.fixed {
      position: fixed;
    
    }
    
    #content {
    
      margin-top: $tablet_header_bottom_margin;
      
      .flexslider {
        .flex-control-paging {
          bottom: 20px;
        }
        .flex-caption {
          bottom: 0px;
        }
        .flex-caption.align-left, .flex-caption.align-right {
          bottom: 0px;
        }
        .flex-caption.align-center {
          bottom: 25px;
        }
      }
      
    }
    
  }

}




/***
Margins & Paddings
***/
.mb0 {
margin-bottom: 0px !important;
}
.mb20 {
margin-bottom: 20px;
}
.mb24 {
margin-bottom: 24px;
}
.pt24 {
padding-top: 24px;
}
.pb24 {
padding-bottom: 24px;
}
.pt20 {
padding-top: 20px;
}
.pb20 {
padding-bottom: 20px;
}
.pr0 {
padding-right: 0px !important;
}
.p10 {
padding: 10px !important;
}
.p0 {
padding: 0px !important;
}
.fa.fa-usd.fa-2x, .fa.fa-css3.fa-2x {
    margin-left: 1em;
}
.fa.fa-location-arrow {
    margin-left: 15px;
}