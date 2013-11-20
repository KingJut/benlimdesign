<!DOCTYPE html>
<html lang="en">
<head>
<?php require_once 'inc/Mobile-Detect/Mobile_Detect.php'; $detect = new Mobile_Detect(); ?>
<?php require_once 'options.php'; ?>

<meta charset="utf-8" />
<meta content="yes" name="apple-mobile-web-app-capable">

<!--


.....................................................................
Build by:

.....................................................................
Emil Olsson
http://emilolsson.com/
hi(at)emilolsson.com
@emilolsson

(*.*)    
.....................................................................


-->

<title><?php global $page, $paged; wp_title( '&mdash;', true, 'right' ); bloginfo('name'); $site_description = get_bloginfo( 'description', 'display' ); if ($site_description && ( is_home() || is_front_page() || is_category() || is_page() || is_single() ) ) echo " &mdash; $site_description"; if ( $paged >= 2 || $page >= 2 ) echo " &mdash; " . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ));
?></title>

<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php 
$stylesheet_dir = get_bloginfo('stylesheet_directory'); 
$home = get_bloginfo('home');
?>

<!-- Favicon -->
<link rel="shortcut icon" href="<?php echo $stylesheet_dir; ?>/favicon.png">
<!-- For third generation iPad Retina Display -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $stylesheet_dir; ?>/apple-touch-icon-144x144-precomposed.png" />
<!-- For iPhone 4 with high-resolution Retina display: -->
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $stylesheet_dir; ?>/apple-touch-icon-114x114-precomposed.png" />
<!-- For first-generation iPad: -->
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $stylesheet_dir; ?>/apple-touch-icon-72x72-precomposed.png" />
<!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
<link rel="apple-touch-icon-precomposed" href="<?php echo $stylesheet_dir; ?>/apple-touch-icon-precomposed.png" />
<!-- For nokia devices: -->
<link rel="shortcut icon" href="<?php echo $stylesheet_dir; ?>/apple-touch-icon.png" />
<!-- IOS webapp Start-up image -->
<!-- iPhone -->
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-320x460.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<!-- iPhone (Retina) -->
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-640x920.png"
      media="(device-width: 320px) and (device-height: 480px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<!-- iPhone 5 -->
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-640x1096.png"
      media="(device-width: 320px) and (device-height: 568px)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<!-- iPad -->
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-768x1004.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-748x1024.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 1)"
      rel="apple-touch-startup-image">
<!-- iPad (Retina) -->
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-1536x2008.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: portrait)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">
<link href="<?php echo $stylesheet_dir; ?>/apple-touch-startup-image-1496x2048.png"
      media="(device-width: 768px) and (device-height: 1024px)
         and (orientation: landscape)
         and (-webkit-device-pixel-ratio: 2)"
      rel="apple-touch-startup-image">

<!-- Hi-Res Webfont Icons -->
<link rel="stylesheet" href="<?php echo $stylesheet_dir; ?>/fonts/hi-responsewebicons/stylesheet.css" type="text/css" charset="utf-8" />
<?php if (get_field('webfont_snippets', 'option')) {
  echo get_field('webfont_snippets', 'option');
} ?>
<!-- (*.*) -->

<!-- RSS/Feed -->
<!--<link rel="alternate" type="application/rss+xml"  href="<?php bloginfo('rss2_url'); ?>" title="<?php bloginfo('title'); ?>'s RSS Feed">-->

<!-- Styles -->
<?php wp_head(); ?>

<!-- IE includes -->
<!--[if lt IE 9]><link rel="stylesheet" href="<?php echo $stylesheet_dir; ?>/css/ie.css"><![endif]-->
<!--[if lt IE 8]><link rel="stylesheet" href="<?php echo $stylesheet_dir; ?>/css/ie7.css"><![endif]-->

<?php if ($detect->isMobile()) { ?>
	<?php if($detect->isTablet()){ ?>
<meta name="viewport" content="width=device-width, user-scalable=0">
	<?php } else { ?>
<meta name="viewport" content="width=device-width, user-scalable=0">
	<?php } ?>
<?php } ?>

</head>

<?php flush(); ?>

<body class="<?php if ($detect->isMobile()) { ?><?php if($detect->isTablet()){ ?>tablet<?php } else { ?>mobile<?php } ?><?php } else { ?>desktop<?php } ?>" data-base="<?php echo $home; ?>" data-dir="<?php echo $stylesheet_dir; ?>">

<?php if ($site_left_right_border == true) { ?>
<div id="border-left">&nbsp;</div>
<div id="border-right">&nbsp;</div>
<?php } ?>
    
<?php include('snippets/toggle_menues.php'); ?>

<div id="wrap">
  
	<div id="header" class="<?php if ($detect->isTablet()) {echo $tablet_header_position;} else if($detect->isMobile()) {echo $mobile_header_position;} else {echo $header_position;} ?>">
	  <?php include('snippets/notifications.php'); ?>
	  <div id="header-inner">
	    <?php include('snippets/separator-head.php'); ?>
	    
  	  <div class="col col-50 col-padd-hori">
	      <?php if ($logo_state) { ?>
	      <h1 id="logo-h1" class="<?php echo $main_title_text_size; ?>">
          <a id="logo-image" href="<?php echo $home; ?>/" class="history <?php if(is_home()) {echo 'marked';} ?>">
            &nbsp;
          </a>
          &nbsp;
        </h1>
	      <?php } else { ?>
		    <h1 id="logo-text-h1" class="<?php echo $main_title_text_size; ?>">
		      <a id="logo-link" href="<?php echo $home; ?>/" class="history <?php if(is_home()) {echo 'marked';} ?>">
		        <?php if ($site_title) {
		          echo $site_title;
		        } else {
		          bloginfo('title');
		        } ?>
		      </a>
		    </h1>
		    <?php } ?>
  		</div>
		
  	  <div id="menu-holder" class="col col-50 <?php echo $main_menu_text_size; ?> <?php if ($main_menu_width == 'Wide') {echo 'wide';} ?> <?php if ($main_menu_type == 'Float Right') {echo 'float-right';} else if ($main_menu_type == 'Float Left') {echo 'float-left';} else if ($main_menu_type == 'None') {echo 'none';} ?>">
        <?php if (has_nav_menu('Main Menu')) { ?>
          <?php if ($main_menu_type == 'None') { ?>
            <div class="col right col-padd-hori default">
              <?php echo $main_menu_text_replacer; ?>
            </div>
          <?php } ?>
		      <a href="#" id="menu-icon" class="icons default" data-icon="j" data-icon-hover="p">j</a>
		      <?php $separator = ''; $before = ''; $menu = wp_nav_menu( array('menu' => 'main-menu','menu_id' => 'menu-main-menu', 'menu_class' => 'menu-main-menu', 'before' => $before, 'after' => ''.$separator.'', 'container' => false, 'echo' => false )); $menu = str_replace('<a',"<a class='history'",$menu);
  		      // Output Menu
  		      echo $menu;
      	  ?>
	  
        <?php } else { // Fallback if the menu has not been set yet ?>
      		<div id="menu" class="right align-right">
      		  <a href="<?php echo get_admin_url('','nav-menus.php',''); ?>">Set your menu</a>
      		</div>
        <?php } ?>
      </div>
    
    </div>    
  </div>

  <div id="change">
	  