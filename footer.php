<?php
wp_footer();
if (function_exists('the_custom_logo')) {
  /* the_custom_logo(); */
  $custom_logo_id = get_theme_mod('custom_logo');
  $logo = wp_get_attachment_image_src($custom_logo_id)[0];
}
?>
<footer class="border-t-indigo-500 border-t-2 shadow-indigo-500 shadow-md">
  <div class="flex justify-between ">
    <div>
      <h3> <?php echo get_bloginfo('name') ?> </h3>
      <img class=" mb-3 mx-auto b-1" src="<?php echo $logo; ?>"> </img>
    </div>
    <div>
      <ul class="list-disc">
        <li class="list-item">
          Κανάρη 65, 71307, Ηράκλειο Κρήτης
        </li>
        <li>
          Τηλ.: +30 2810 336843
        </li>
        <li>
          Κινητό.: +30 6985 564417
        </li>
        <li>
          Email: <a href="mailto:info@evivaweddings.gr">info@evivaweddings.gr</a>, <a href="mailto:katsarakieva@yahoo.gr">katsarakieva@yahoo.gr</a>
        </li>
      </ul>
    </div>
  </div>
</footer>
</body>

</html>
