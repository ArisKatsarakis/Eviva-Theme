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
    <div> </div>
    <div class=" text-white flex justify-center gap-20">
      <a href="/" class="text-sm font-semibold leading-6 ">Home</a>
      <a href="/about-us/" class="text-sm font-semibold leading-6 ">About Us</a>
      <a href="/wedding-packages/" class="text-sm font-semibold leading-6 ">Wedding Packages</a>
      <a href="/contact-us" class="text-sm font-semibold leading-6 ">Contact Us</a>
    </div>
  </header>
  <div class="about-image border-b-2">
    <img src="http://localhost/wp-content/uploads/2024/04/couple_in_church5.jpg" class="w-full " />
    <div class="absolute top-2/4 inset-x-2/4 text-white w-5/6">
      <h3 class="text-white text-4xl mb-2"> <?php echo get_bloginfo('name') ?> </h3>
      <p> EVIVA Weddings in Crete Island </p>
    </div>
  </div>
  <div class=" text-center plain-text container border-b-2 mt-4">
    <p>Following their heart, nature and talents Evi and Eva gathered their strengths and EVIVA weddings is born.</p>
    <p> EVIVA weddings offers full service on destination planning and design, all around Crete, either in unique proposed wedding packages, or customized and specially organized wedding packages “only for you”. </p>
  </div>
  <div class=" grid grid-cols-3 gap-4 mt-6 items-center shadow-black shadow-sm container">
    <div class="text-center mr-2 col-span-2">
      <p><strong>EVI</strong> is a warmhearted and experienced designer of wedding dresses, bridesmaid dresses, bridal and formal gowns. Evi will listen carefully to your wishes and needs and make suggestions to finesse your perfect day! Her only objective is to make your wedding a truly unique handmade experience! </p>
      <p><strong>Evi</strong> is the founder of EVIVA Weddings, wife of Manolis over 30 years, mother of three children, professional wedding dressmaker and self – taught and experienced decorator. For more than 30 years she decorates houses and stores all around Crete, as well as hotels, cafés, restaurants and venues. Since 2000, she keeps her own familiar wedding dresses collection, exclusively for family and friends. </p>
    </div>
    <div class="col-span-1 m-auto p-4 min-h-50 bg-black text-white ml-2 rounded-2xl border-2 text-center justify-center flex mt-4">
      <div class=" w-2/4">
        <img src="http://localhost/wp-content/uploads/2024/04/evi_gray.jpg" alt="evi" />
      </div>
    </div>
  </div>
  <div class=" grid grid-cols-3 gap-4 mt-6 items-center">
    <div class="col-span-1 m-auto p-4 min-h-50 bg-black text-white ml-2 rounded-2xl border-2 text-center justify-center flex mt-4">
      <div class=" w-2/4">
        <img src="http://localhost/wp-content/uploads/2024/04/eva_grey.jpg" alt="eva" />
      </div>
    </div>
    <div class="text-center mr-2 col-span-2">
      <p><strong>EVA</strong>, Evi’s oldest daughter is a passionate wedding planner, specializing in transforming your vision into an extraordinary and memorable event. Filled with excitement about life, she is always around, curious to discover novel ideas for her guests and clients in Crete! </p>
      <p><strong>Eva's</strong> professional experience in organizing tourism packages all around Europe, has given her a strong appreciation of different cultures, and the desired skills to combine the beauties of the island of Crete with the visitors’ desires in order to organize memorable vacation and wedding celebrations.</p>
    </div>
  </div>
