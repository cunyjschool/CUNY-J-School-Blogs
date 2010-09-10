<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta name="verify-v1" content="mBYP9MH4Ejm4UfqAqvQJ3i9hYw0ywU+0LbTnOEeVWbk=" />
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> <?php } ?> <?php wp_title(); ?></title>

<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<script language="javascript1.4" type="text/javascript" src="http://blogs.journalism.cuny.edu/wp-content/plugins/audio-player/audio-player.js"></script>

<?php wp_head(); ?>
</head>

<body>

<div id="global"><a href="http://blogs.journalism.cuny.edu/">Blogs</a> at the <a href="http://www.journalism.cuny.edu">CUNY Graduate School of Journalism</a></div>

<div id="content">
  <div id="header">
<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
<span class="description"><?php bloginfo('description'); ?></span>
  </div>

  <div id="nav" class="clearfix">
<ul>
  <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
  <?php wp_list_pages('title_li='); ?>
</ul>
  </div>