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
      <div class="package-item active" count='0'>
        <h1> Rustic Wedding </h1>
      </div>
      <div class="package-item" count='1'>
        <h1> Luxurius Wedding </h1>
      </div>
      <div class="package-item" count='2'>
        <h1> Traditional Cretan Wedding </h1>
      </div>
    </div>
    <div class="packages-slider">
      <div class="container packages-list active  grid grid-cols-3 gap-4" count='0'>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/dress11_big-thumb.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/couple8.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/bouquet1_big-thumb.jpg" />
        </div>
      </div>
      <div class="container packages-list grid grid-cols-3 gap-4" count='1'>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/couple8.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/dress11_big-thumb.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/bouquet1_big-thumb.jpg" />
        </div>
      </div>
      <div class="container packages-list grid grid-cols-3 gap-4" count='2'>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/couple8.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/bouquet1_big-thumb.jpg" />
        </div>
        <div class="packages-slider-item">
          <img src="http://localhost/wp-content/uploads/2024/04/dress11_big-thumb.jpg" />
        </div>
      </div>
    </div>
    <div class="text-center plain-text container border-b-2 mt-4">
      <h1 class="text-6xl m-0"> Our Services </h1>
    </div>
    <div class="container  mt-2  flex text-center bg-indigo-50 ">
      <ul class="grid grid-cols-3 gap-4 align-top place-items-center ">
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">Event Design and Budget Development: </h2>
            <p class="text-xl">
              Full event design & overall concept development <br />
              Design & decor planning and execution
              Custom budget formulation & cost breakdown
            </p>
          </div>
        </li>
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">Vendor Coordination and Management:</h2>
            <p class="text-xl">
              Full-service vendor referral & ongoing management <br />
              Negotiation & drafting of contracts <br />
              Entertainment coordination for the couple and guests
            </p>
          </div>
        </li>
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">
              Venue Logistics and Catering Selection:
            </h2>
            <p class="text-xl">
              Ceremony & reception venue scouting & selection <br />
              Accommodation consultation & transportation services <br />
              Food, beverage & overall menu design
            </p>
          </div>
        </li>
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">
              Stationery and Communication:
            </h2>
            <p class="text-xl">
              Calligraphy & printed materials <br />
              Regular communication & progress meetings
              Full on-site coordination and event management
            </p>
          </div>
        </li>
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">
              Guest Services and Hospitality:
            </h2>
            <p class="text-xl">
              Gifts, favours & welcome baskets /
              Pre/Post wedding festivities
              <br />
              Bridal beauty services <br />
              Etiquette advice <br />
            </p>
          </div>
        </li>
        <li class="list-disc">
          <div class="text-left">
            <h2 class="text-center text-2xl border-b-2 border-black my-2">
              Logistical Planning and Coordination:
            </h2>
            <p class="text-xl">
              Paperwork consultation
              Detailed timelines, production schedule and itinerary of the event
              Ceremony and reception set-up
              Venue site clear-out
            </p>
          </div>
        </li>
      </ul>
    </div>
