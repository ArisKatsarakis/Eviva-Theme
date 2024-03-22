<!DOCTYPE html>
<html lang="en"> 
<head>
    <!-- FontAwesome CSS-->
<?php 
  wp_head();
?>

</head> 

<body>
<header> 
<?php
  if(function_exists('the_custom_logo')) {
    /* the_custom_logo(); */
    $custom_logo_id = get_theme_mod('custom_logo');
    $logo = wp_get_attachment_image_src($custom_logo_id)[0];

  } 
    ?>
<?php
  wp_nav_menu([
    'menu' => 'primary',
    'container' => '',
    'theme_location' => 'primary',
    'item_wrap' => '<ul id="" class="">%4$s</ul>'
  ])

  /**
   * Go to menus then choose custom classes for adding classes from tailwind
   * in order to work with the menu properly
   * Pro: See how a wrapper is being written for creating custom menus 
   */
?>
<img class=" mb-3 mx-auto b-1" src="<?php echo $logo; ?>">  </img>
<h3> <?php echo get_bloginfo('name') ?> </h3>
</header>   
