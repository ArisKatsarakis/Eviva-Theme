  <?php
  if (function_exists('the_custom_logo')) {
    /* the_custom_logo(); */
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id)[0];
  }
  ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>
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
