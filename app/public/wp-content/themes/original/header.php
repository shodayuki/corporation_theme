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
  <header>
    <div id="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="#">
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo home_url(); ?>">TOP</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="map.html">MAP</a></li>
        <li><a href="blog.html">BLOG</a></li>
        <li><a href="contact.html">CONTACT</a></li>
      </ul>
    </nav>
  </header>
  <div id="cover">
    <div id="slide">
      <img src="<?php echo get_template_directory_uri(); ?>/images/slide-1.png" alt="#">
    </div>
  </div>