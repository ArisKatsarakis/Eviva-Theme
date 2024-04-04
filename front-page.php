<?php
get_header();
function slidingImages()
{

  $images = [
    'http://localhost/wp-content/uploads/2024/03/section2.jpg',
    'http://localhost/wp-content/uploads/2024/03/foto2.jpg',
  ];
  echo '<div class="slider"> ';
  echo '
    <div class="list">
';
  foreach ($images as $image) {
?>
    <div class="item <?php if ($images[0] == $image) {
                        echo 'active';
                      } ?>">
      <img src="<?php echo $image ?>" />
      <div class="item-content">
        <p> image </p>
      </div>
      <div class="absolute next right-2  inset-y-2/4  text-white transition ease-in-out" id="next">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class=" bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0M4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5z" />
        </svg>
      </div>
      <a class="absolute prev left-2  inset-y-2/4  text-white transition ease-in-out z-0" id="prev">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
          <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0m3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5z" />
        </svg>
      </a>
    </div>
<?php
  }
  echo '</div>';
  echo '</div>';
}
slidingImages();
?>
<div class="grid grid-cols-2">
  <h1 class=" col-span-2 font-josefin text-xl font-bold text-center  prose prose-headings:h2   bg-gradient-to-r from-creme  to-white"> Meet The Team </h1>
</div>
<div class="   justify-around  hover:ease-in bg-gradient-to-r from-creme  to-white flex  text-center ... ">
  <img class="flex-shrink" src="http://localhost/wp-content/uploads/2024/03/evi_eva.png" alt="evi_eva" />
  <p class="flex-grow">Following their heart, nature and talents Evi and Eva gathered their strengths and EVIVA weddings is born. EVIVA weddings offers full service on destination planning and design, all around Crete, either in unique proposed wedding packages, or customized and specially organized wedding packages “only for you”.</p>
</div>
<div class="justify-center flex  shadow-xl border-b-2 border-gray-400 pb-2">
  <a href="#" class="mr-2 bg-black px-4 py-2  rounded-3xl text-white"> Contact Us! </a>
  <a href="#" class=" bg-black px-4 py-2  rounded-3xl text-white"> Learn More </a>
</div>
<div class="text-center">
  <h2 class="prose prose-headings:h2 text-xl"> Weeding Packages</h2>
  <div class="grid grid-cols-2 gap-4">
    <div class="border-2  border-black">
      <h2> Luxurius Wedding </h2>
    </div>
    <div class="border-2  border-black">
      <h2> Traditional Crete Wedding </h2>
    </div>
  </div>
  <div class="grid grid-cols-2 gap-4">
    <div class="shadow-md  border-black">
      <img src="http://localhost/wp-content/uploads/2024/04/dress11_big-thumb.jpg" class="w-full" />
    </div>
    <div class="border-2  border-black">
      <img src="http://localhost/wp-content/uploads/2024/04/dress13-scaled.jpg" class="w-full" />
    </div>
  </div>
</div>
<script>
  let prevButton = document.getElementById('prev');

  prevButton.onClick = function() {
    console.log('testing previous button');
    let active = document.querySelectorAll('.slider .list .item.active');
    active.opacity = 0;
  }
</script>
<?php
get_footer();
?>
