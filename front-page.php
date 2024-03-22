<?php
get_header();
?>
<article class="about-section content px-3 py-5 p-md-5">
  <div class="container">
    <?php
    if (have_posts()) {
      while (have_posts()) {
        the_post();
        the_content();
      }
    }
    ?>
  </div>
  <div id="react-slider">
    slider
  </div>
</article>
<?php
get_footer();
?>
