<?php

	if ( !isset($wp_did_header) ) {

		$wp_did_header = true;

		require_once( dirname(__FILE__) . '/wp-load.php' );

		wp();

		require_once( ABSPATH . WPINC . '/template-loader.php' );

	}

	$my_db = new mysqli("localhost", "root", "root", "minivertising");
	if (mysqli_connect_error()) {
		exit('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
	}
	mysqli_query($my_db,"set session character_set_connection=utf8;");
	mysqli_query($my_db,"set session character_set_results=utf8;");
	mysqli_query($my_db,"set session character_set_client=utf8;");

	//include_once("config.php");
	$query_options = "SELECT option_value FROM wp_options WHERE option_name='home'";
	list($home) = mysqli_fetch_array(mysqli_query($my_db, $query_options));

?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html> <!--<![endif]-->
  <head>

  <!-- Basic Page Needs
  ================================================== -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>MINIVERTISING</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="drone.tv" />
    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
    <!-- CSS
  ================================================== -->
    <link rel="stylesheet" type="text/css" media="all" href="<?=$home?>/wp-content/themes/Workality-Lite-master/style.css" />
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" media="all" href="<?=$home?>/wp-content/themes/Workality-Lite-master/style_ie.css" />
    <![endif]-->

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Favicons
    ================================================== -->
    <link rel="apple-touch-icon" href="<?=$home?>/wp-content/themes/Workality-Lite-master/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=$home?>/wp-content/themes/Workality-Lite-master/images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=$home?>/wp-content/themes/Workality-Lite-master/images/apple-touch-icon-114x114.png">
        
    <!-- RSS
    ================================================== -->
    <link rel="alternate" type="application/rss+xml" title="MINIVERTISING Feed" href="<?=$home?>/rss">
    <link rel="pingback" href="<?=$home?>/xmlrpc.php" />

    <!-- Head End
    ================================================== -->
    <link rel="alternate" type="application/rss+xml" title="MINIVERTISING &raquo; Feed" href="<?=$home?>/?feed=rss2" />
    <link rel="alternate" type="application/rss+xml" title="MINIVERTISING &raquo; Comments Feed" href="<?=$home?>/?feed=comments-rss2" />
    <link rel="alternate" type="application/rss+xml" title="MINIVERTISING &raquo; CONTACT Comments Feed" href="<?=$home?>/?feed=rss2&#038;page_id=109" />
    <link rel='stylesheet' id='open-sans-css'  href='//fonts.googleapis.com/css?family=Open+Sans%3A300italic%2C400italic%2C600italic%2C300%2C400%2C600&#038;subset=latin%2Clatin-ext&#038;ver=4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css'  href='<?=$home?>/wp-includes/css/dashicons.min.css?ver=4.0' type='text/css' media='all' />
    <link rel='stylesheet' id='admin-bar-css'  href='<?=$home?>/wp-includes/css/admin-bar.min.css?ver=4.0' type='text/css' media='all' />
    <script type='text/javascript' src='<?=$home?>/wp-content/themes/Workality-Lite-master/js/modernizr.js?ver=4.0'></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js?ver=4.0'></script>
    <script type='text/javascript' src='<?=$home?>/wp-content/themes/Workality-Lite-master/js/include.js?ver=4.0'></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?=$home?>/xmlrpc.php?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?=$home?>/wp-includes/wlwmanifest.xml" /> 
    <meta name="generator" content="WordPress 4.0" />
    <link rel='canonical' href='<?=$home?>/contact/' />
    <link rel='shortlink' href='<?=$home?>/contact/' />
    <style type="text/css" media="print">#wpadminbar { display:none; }</style>
    <style type="text/css" media="screen">
		html { margin-top: 32px !important; }
		* html body { margin-top: 32px !important; }
		@media screen and ( max-width: 782px ) {
		html { margin-top: 46px !important; }
		* html body { margin-top: 46px !important; }
		}
    </style>
    
  </head>

  <body class="page-template-default logged-in admin-bar no-customize-support">

    <div class="container">
    
      <div class="sixteen columns topmargin clearfix">
        <div class="six columns alpha">
          <a href="#" class="button navbarbutton pull-right"><i class="menu-icon"></i></a>
          <a href="<?=$home?>" class="main-logo" title="drone"><img src="<?=$home?>/wp-content/themes/Workality-Lite-master/images/logo.png" borer="0" /></a>
        </div>
        
        
        <div class="ten columns omega header-right" style="display:none;">
          <div class="nav-div">
            <form action="<?=$home?>">
              <input type="text" name="s" class="medium" value="">
              <button type="submit"><i class='icon-search'></i></button>
            </form>
          </div>
        </div>
        
        
     
        <div class="ten columns omega header-right">
          <ul id="menu-menu1" class="main-nav text-shadow">
<?php
	if (strpos($_SERVER['REQUEST_URI'], "about") !== false)
	{
?>
            <li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-2 current_page_item menu-item-142">
<?php
	}else{
?>
            <li id="menu-item-142" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-142">
<?php
	}
?>

              <a href="<?=$home?>/about/">ABOUT</a>
            </li>
<?php
	if (strpos($_SERVER['REQUEST_URI'], "work") !== false)
	{
?>
            <li id="menu-item-140" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item-133 current_page_item menu-item-140">
<?php
	}else{
?>
            <li id="menu-item-140" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
<?php
	}
?>
              <a href="<?=$home?>/work/">WORK</a>
            </li>
<?php
	if (strpos($_SERVER['REQUEST_URI'], "news") !== false)
	{
?>
            <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-136 current_page_item menu-item-139">
<?php
	}else{
?>
            <li id="menu-item-139" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
<?php
	}
?>
              <a href="<?=$home?>/news/">NEWS</a>
            </li>
<?php
	if (strpos($_SERVER['REQUEST_URI'], "contact") !== false)
	{
?>
            <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-109 current_page_item menu-item-141">
<?php
	}else{
?>
            <li id="menu-item-141" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-109">
<?php
	}
?>
              <a href="<?=$home?>/contact/">CONTACT</a>
            </li>
          </ul> 
        </div>
        <br class="clear" />
        <hr class="headerbottom border-color" />
      </div>

    <div class="header_contact"></div>
