<?php
get_header();
?>
<article class="about-section content px-3 py-5 p-md-5">
  <div class="container">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
      }
    }
    ?>
  </div>
  <div class="  px-6 lg:px-8">
    <div class="mx-auto max-w-2xl lg:mx-0 text-center shadow-inner">
      <span class=" font-bold tracking-tight text-creme sm:text-6xl  bg-transparent text-center text-2xl  font-josefin">Eviva Weddings</span>

    </div>
  </div>
  <div id="react-slider">
    slider
  </div>
  <div>
    <p class="mt-6 text-lg leading-8 border-2 border-2-red">Weddings Imagine and create the best wedding memories with the best wedding planners on Crete</p>
  </div>
</article>
<div class="mt-2 bg-creme shadow-black  shadow-xl">
  <h1 class="font-josefin text-2xl  font-bold text-center border-b-2 mb-2 "> Meet The Team </h1>
  <div class="flex justify-between">
    <div class="flex-auto w-50 text-xl">Basic text placer for sponsoring and eagering to meet the team </div>
    <div class="flex-auto p-6 mr-3 min-w-100 w-30 h-50 shadow-black  shadow-md align-middle min-h-10 mb-3">
      <img src="http://localhost/wp-content/uploads/2024/03/evi_eva.png" alt="evi_eva" />
    </div>

  </div>
</div>
<div>
  <h2> Contact us</h2>
</div>
<div>
  <h2> Share Your Comments at our Blog</h2>
</div>


<?php
get_footer();
?>
