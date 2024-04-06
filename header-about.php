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
  }
  ?>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>

  <header class="flex justify-between  bg-black bg-opacity-10">
    <h3 class="text-white"> <?php echo get_bloginfo('name') ?> </h3>
    <div class=" text-white flex justify-center gap-20">
      <a href="/" class="text-sm font-semibold leading-6 ">Home</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">About Us</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">Wedding Packages</a>
      <a href="/contact-us" class="text-sm font-semibold leading-6 ">Contact Us</a>
    </div>
  </header>
  <div class="about-image border-b-2">
    <img src="http://localhost/wp-content/uploads/2024/04/couple_in_church5.jpg" class="w-full " />
    <div class="absolute top-2/4 inset-x-2/4 text-white w-5/6">
      <p class="text-4xl mb-6 text-left"> The Team </p>
      <a href="#" class="border-white-500 w-10 h-10 border-2 px-4 py-2 mt-4"> Contact us </a>
    </div>
  </div>
