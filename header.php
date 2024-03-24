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
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
  <div class="drop-shadow-lg bg-contain">
    <header class=" inset-x-0 top-0 z-50  border-b-2 border-indigo-500 drop-shadow-md">
      <nav class="flex items-center justify-between  lg:px-12">
        <div class="flex lg:flex-1">
          <a href="#" class="-m-1.5 p-1.5">
            <img class=" mb-3 mx-auto b-1" src="<?php echo $logo; ?>"> </img>
            <span class="sr-only drop-shadow-lg">
              <h3> <?php echo get_bloginfo('name') ?> </h3>
            </span>
          </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-12">
          <a href="/localhost/home" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
          <a href="http://localhost/about-us/" class="text-sm font-semibold leading-6 text-gray-900">About Us</a>
          <a href=".contact-us" class="text-sm font-semibold leading-6 text-gray-900">Contact Us</a>
        </div>
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

        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
          <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Social Media:</a>
        </div>
      </nav>
    </header>
  </div>
