<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
  <header>
    <div id="logo">
      <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="#">
      </a>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="<?php echo home_url(); ?>/about">ABOUT</a></li>
        <li><a href="<?php echo home_url(); ?>/map">MAP</a></li>
        <li><a href="<?php echo home_url(); ?>/category/staff">BLOG</a></li>
        <li><a href="<?php echo home_url(); ?>/contact">CONTACT</a></li>
      </ul>
    </nav>
  </header>
  <div id="cover">
    <div id="slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="#">
    </div>
  </div>