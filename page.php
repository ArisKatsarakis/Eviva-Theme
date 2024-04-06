<?php
if (is_page('about-us')) {
  get_header('about');
} else {
  get_header();
}
?>
<div>
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
  </article>
</div>
<?php
get_footer();
?>
