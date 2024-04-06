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
  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
  <header class="flex justify-between ">
    <div>
      <h3 class="text-black text-4xl mb-2"> <?php echo get_bloginfo('name') ?> </h3>
    </div>
    <div class=" text-black text-3xl flex justify-center gap-20">
      <a href="/" class="text-sm font-semibold leading-6 ">Home</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">About Us</a>
      <a href="/wedding-packages/" class="text-sm font-semibold leading-6 ">Wedding Packages</a>
      <a href="/contact-us" class="text-sm font-semibold leading-6 ">Contact Us</a>
    </div>
  </header>
  <div class="packages-image border-b-2 ">
    <img src="http://localhost/wp-content/uploads/2024/04/dress2.jpg" class="w-full " />
    <div class="absolute top-2/4 inset-x-2/4 text-black z-10 ">
      <h2> Our Services </h2>
      <p> EVIVA Weddings in Crete Island </p>
    </div>
  </div>
  <div class="packages">
    <div class="flex justify-between container mt-4 ">
      <div class="package-item active">
        <h1> Rustic Wedding </h1>
      </div>
      <div class="package-item">
        <h1> Luxurius Wedding </h1>
      </div>
      <div class="package-item">
        <h1> Traditional Cretan Wedding </h1>
      </div>
    </div>
    <div class="packages-list">

    </div>
  </div>
