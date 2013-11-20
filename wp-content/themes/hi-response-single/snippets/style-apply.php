<style>
  /* BG's */
  body, html, #block, #cover {
    background: <?php echo $grab_site_background_color; ?>;
  }
  #header, #header-inner {
    background: <?php echo $grab_header_background_color; ?>;
  }
  #toggle-menu {
    background: <?php echo $grab_menu_background_color; ?>;
  }
  
  <?php if ($header_background_transparency == true) { ?>
  #header, #header-inner, #toggle-menu {
    background: transparent;
  }
  <?php } ?>
  
  /* Text & links */
  body, html {
    color: <?php echo $grab_text_color; ?>;
  }
  a {
    color: <?php echo $grab_link_color; ?>;
  }
  a:hover {
    color: <?php echo $grab_link_marked_color; ?>;
  }
  h1 a, h2 a, h3 a, h4 a, h5 a {
    color: <?php echo $grab_link_color; ?>;
  }
  .current-menu-item a, .current-category-ancestor a, a.marked, .current-cat a {
    color: <?php echo $grab_link_marked_color; ?>;
  }
ul.sub-menu a {
  color: <?php echo $grab_link_color; ?>;
}
ul.sub-menu a:hover {
  color: <?php echo $grab_link_marked_color; ?>;
}
ul.sub-menu .current-menu-item a, ul.sub-menu .current-category-ancestor a, ul.sub-menu a.marked, ul.sub-menu .current-cat a {
  color: <?php echo $grab_link_marked_color; ?>;
}
  .underline {
    border-bottom: 1px solid <?php echo $grab_text_color; ?>;
  }
  /* Borders */
  <?php if (get_field("link_decoration", "option") == '1px always') { ?>
  a {
    border-bottom: 1px solid <?php echo $grab_link_color; ?>;
  }
  a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.underline {
    border-bottom: 1px solid <?php echo $grab_link_color; ?>;
  }
  .underline {
    border-bottom: 1px solid <?php echo $grab_text_color; ?>;
  }
  .dimmed a.marked {
    border-bottom: 1px solid <?php echo $grab_index_item_dimmed_color; ?> !important;
  }
  .dimmed a:hover, .dimmed a {
    border-bottom: 1px solid <?php echo $grab_index_item_dimmed_color; ?> !important;
  }
  .active a.marked {
    border-bottom: 1px solid <?php echo $grab_index_item_active_color; ?> !important;
  }
  .active a:hover {
    border-bottom: 1px solid <?php echo $grab_index_item_active_color; ?> !important;
  }
  .current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a.marked, h1 a.marked {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a:hover, h1 a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.unmarked {
    border-bottom: 1px solid transparent !important; 
  }
  <?php } else if (get_field("link_decoration", "option") == '1px on mouseover and marked') { ?>
  a {
    border-bottom: 1px solid transparent;
  }
  a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.underline {
    border-bottom: 1px solid transparent;
  }
  .underline {
    border-bottom: 1px solid <?php echo $grab_text_color; ?>;
  }
  .dimmed a.marked {
    border-bottom: 1px solid transparent !important;
  }
  .dimmed a:hover {
    border-bottom: 1px solid <?php echo $grab_index_item_dimmed_color; ?>  !important;
  }
  .active a.marked {
    border-bottom: 1px solid transparent !important;
  }
  .active a:hover {
    border-bottom: 1px solid <?php echo $grab_index_item_active_color; ?> !important;
  }
  .current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a.marked, h1 a.marked {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a:hover, h1 a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.unmarked {
    border-bottom: 1px solid transparent !important; 
  }
  <?php } else if (get_field("link_decoration", "option") == '1px special') { ?>
  a {
    border-bottom: 1px solid transparent;
  }
  a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.underline {
    border-bottom: 1px solid transparent;
  }
  .underline {
    border-bottom: 1px solid <?php echo $grab_text_color; ?>;
  }
  .dimmed a.marked {
    border-bottom: 1px solid <?php echo $grab_index_item_dimmed_color; ?>;
  }
  .dimmed a:hover {
    border-bottom: 1px solid <?php echo $grab_index_item_dimmed_color; ?>;
  }
  .active a.marked {
    border-bottom: 1px solid <?php echo $grab_index_item_active_color; ?> !important;
  }
  .active a:hover {
    border-bottom: 1px solid <?php echo $grab_index_item_active_color; ?> !important;
  }
  .current-menu-item a, .current-category-ancestor a, .current-menu-parent a {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a.marked, h1 a.marked {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  #menu-main-menu a:hover, h1 a:hover {
    border-bottom: 1px solid <?php echo $grab_link_marked_color; ?>;
  }
  a.unmarked {
    border-bottom: 1px solid transparent !important; 
  }
  <?php } ?>
  
  /* Media  */
  /* Loading */
  .img-holder, .slideshow-holder .slideshow .slide, iframe, .flexslider {
    background: <?php echo $grab_media_loader_bg_color; ?>;
  }
  #pageloader, .slide-spinn {
    background: <?php echo $grab_loader_color; ?>;
  }
  /* Grid & Masonry */
  .img-holder .focus-mode .tt, .img-holder .focus-mode .tr, .img-holder .focus-mode .bb, .img-holder .focus-mode .bl {
    background: <?php echo $grab_text_color; ?>;
  }
  /* Row */  
  .row-holder .row .row-item .img-holder .figcaption {
    color: <?php echo $grab_row_item_hover_text_color; ?>;
  }
  .row-holder .row .row-item .img-holder .figcaption-bg {
    background: <?php echo $grab_row_item_hover_background_color; ?>;
  }
  /* Slideshows */
  .flexslider {background: <?php echo $grab_media_loader_bg_color; ?>;}
  .flex-direction-nav .flex-next, .flex-direction-nav .flex-prev, .flexslider .flex-caption {color: <?php echo $grab_text_color; ?>;}
  .flex-control-paging li a {background: <?php echo $grab_text_color; ?>;}
  /* Thumbnails */
  a.thumb .img-holder .figcaption span.underline {
    color: <?php echo $grab_thumbnail_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  a.thumb .img-holder .figcaption-bg {
    background: <?php echo $grab_row_item_hover_background_color; ?>;
  }
  a.thumb .figcaption.stick span.underline {
    color: <?php echo $grab_thumbnail_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  a.thumb.row-thumb .img-holder .figcaption span.underline {
    color: <?php echo $grab_row_item_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 0px solid transparent;
      text-decoration: underline;
    <?php } else { ?>
      border-bottom: 0px solid transparent;
    <?php } ?>
  }
  a.thumb.ready.hover .img-holder .figcaption span.underline, a.thumb.ready.active .img-holder .figcaption span.underline {
    color: <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  a.thumb.ready.hover .figcaption.stick span.underline, a.thumb.ready.active .figcaption.stick span.underline {
    color: <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  a.thumb.row-thumb.ready.hover .img-holder .figcaption span.underline {
    color: <?php echo $grab_row_item_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 0px solid transparent;
      text-decoration: underline;
    <?php } else { ?>
      border-bottom: 0px solid transparent;
    <?php } ?>
  }
  a.thumb.row-thumb.ready.active .img-holder .figcaption span.underline {
    color: <?php echo $grab_row_item_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 0px solid transparent;
      text-decoration: underline;
    <?php } else { ?>
      border-bottom: 0px solid transparent;
    <?php } ?>
  }
  body.desktop a.thumb.ready:hover .img-holder .figcaption span.underline {
    color: <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  body.desktop a.thumb.ready:hover .figcaption.stick span.underline {
    color: <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 1px solid <?php echo $grab_thumbnail_hover_text_color; ?>;
    <?php } else { ?>
      border-bottom: 1px solid transparent;
    <?php } ?>
  }
  body.desktop a.thumb.row-thumb.ready .img-holder .figcaption span.underline {
    color: <?php echo $grab_row_item_hover_text_color; ?>;
    <?php if ($link_decoration == '1px always' || $link_decoration == '1px on mouseover and marked') { ?>
      border-bottom: 0px solid transparent;
      text-decoration: underline;
    <?php } else { ?>
      border-bottom: 0px solid transparent;
    <?php } ?>
  }

  /* Img link Fix */
  a.img-holder {
    border-bottom: 0px !important;
  }
  /* Dimmed */
  .dimmed, .dimmed a {
    color: <?php echo $grab_index_item_dimmed_color; ?>;
  }
  /* Active */
  .active, .active a {
    color: <?php echo $grab_index_item_active_color; ?>;
  }
  /* NextPrev Fixed */
  #nextprev a.prev-fixed, #nextprev a.next-fixed {
    background: <?php echo $grab_text_color; ?>;
    color: <?php echo $grab_site_background_color; ?>;
  }
  /* Site Borders & Separators */
  hr {
    border-color: <?php echo $grab_borders_color; ?> !important;
  }
  .index-module .index-item .index-separator hr {
    border-top: <?php echo $separator_height_alt; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
  #header hr {
    border-top: <?php echo $header_separator_height; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
  #border-left, #border-right {
    border-left-color: <?php echo $grab_borders_color; ?>;
  }
  /* Menus */
  <?php if ($toggle_menu_render_type == 'Menu item top line') { ?>
  #toggle-menu-inner li a {
    border-top: <?php echo $toggle_menu_line_height; ?>px solid <?php echo $grab_borders_color; ?>;
  }
  <?php } ?>
  
  <?php if ($secondary_menu_render_type == 'Menu item top line') { ?>
  #secondary_menu_holder li a {
    border-top: <?php echo $secondary_menu_line_height; ?>px solid <?php echo $grab_borders_color; ?>;
  }
  <?php } ?>
  
  <?php if ($section_menu_render_type == 'Menu item top line') { ?>
  #section_menu_holder li a {
    border-top: <?php echo $section_menu_line_height; ?>px solid <?php echo $grab_borders_color; ?>;
  }
  <?php } ?>
  /* Forms */
  input, textarea, select {
    border: <?php echo $forms_border_width; ?>px solid <?php echo $grab_forms_border_color; ?> !important;
    background: <?php echo $grab_forms_background_color; ?> !important;
    color: <?php echo $grab_forms_text_color; ?> !important;
  }
  input:focus, textarea:focus, select:focus {
    border: <?php echo $forms_border_width; ?>px solid <?php echo $grab_forms_focus_border_color; ?> !important;
  }
  button, input[type="submit"] {
    background: <?php echo $grab_button_background_color; ?> !important;
    color: <?php echo $grab_button_text_color; ?> !important;
    border: <?php echo $forms_border_width; ?>px solid <?php echo $grab_button_background_color; ?> !important;
  }
  button:hover, input[type="submit"]:hover {
    background: <?php echo $grab_button_hover_background_color; ?> !important;
    color: <?php echo $grab_button_hover_text_color; ?> !important;
    border: <?php echo $forms_border_width; ?>px solid <?php echo $grab_button_hover_background_color; ?> !important;
  }
  ::-webkit-input-placeholder {
    color: <?php echo $grab_forms_text_color; ?>;
  }
  :-moz-placeholder {
    color: <?php echo $grab_forms_text_color; ?>;
  }
  ::-moz-placeholder {
    color: <?php echo $grab_forms_text_color; ?>;
  }
  :-ms-input-placeholder {
    color: <?php echo $grab_forms_text_color; ?>;
  }
  /* Mobile & Tablet */
    /* Mobile Forms */
  body.mobile input, body.mobile textarea, body.mobile select {
    border: <?php echo $mobile_forms_border_width; ?>px solid <?php echo $grab_forms_border_color; ?> !important;
  }
  body.mobile input:focus, body.mobile textarea:focus, body.mobile select:focus {
    border: <?php echo $mobile_forms_border_width; ?>px solid <?php echo $grab_forms_focus_border_color; ?> !important;
  }
  body.mobile button, body.mobile input[type="submit"] {
    border: <?php echo $mobile_forms_border_width; ?>px solid <?php echo $grab_button_background_color; ?> !important;
  }
  body.mobile button:hover, body.mobile input[type="submit"]:hover {
    border: <?php echo $mobile_forms_border_width; ?>px solid <?php echo $grab_button_hover_background_color; ?> !important;
  }
    /* Mobile Headers */
  body.mobile #wrap #header {
    border-bottom: <?php echo $mobile_header_border; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
  body.tablet #wrap #header {
    border-bottom: <?php echo $tablet_header_border; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
  body.mobile #wrap #header #header-inner #menu-holder #menu-icon {
    border-left: <?php echo $mobile_header_border; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
  body.tablet #wrap #header #header-inner #menu-holder #menu-icon {
    border-left: <?php echo $tablet_header_border; ?>px solid <?php echo $grab_borders_color; ?> !important;
  }
</style>