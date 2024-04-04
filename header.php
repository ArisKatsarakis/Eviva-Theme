<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  wp_head();
  ?>

  <?php
  if (function_exists('the_custom_logo')) {
    /* the_custom_logo(); */
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id)[0];
  }
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
  <header class="flex justify-between ">
    <h3> <?php echo get_bloginfo('name') ?> </h3>
    <div class="">
      <a href="#" class="">
        <!-- <img src="<?php echo $logo; ?>"> </img> -->
        <span class="text-white">
        </span>
      </a>
    </div>
    <div class=" flex justify-center gap-20">
      <a href="/" class="text-sm font-semibold leading-6 ">Home</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">About Us</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">Wedding Packages</a>
      <a href="/contact-us" class="text-sm font-semibold leading-6 ">Contact Us</a>
    </div>
  </header>
  <!--<div>
          <?php
          /* wp_nav_menu([ */
          /*   'menu' => 'primary', */
          /*   'container' => '', */
          /*   'theme_location' => 'primary', */
          /*   'item_wrap' => '<ul id="" class="lg:gap-x-12 lg:flex  bg-red-100 text-sm">%4$s</ul>' */
          /* ]) */

          /**
           * Go to menus then choose custom classes for adding classes from tailwind
           * in order to work with the menu properly
           * Pro: See how a wrapper is being written for creating custom menus 
           */
          ?>
         </div> -->
