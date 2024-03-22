<?php

function evivatheme_theme_support() {
  add_theme_support('title-tag');
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'evivatheme_theme_support');



function evivatheme_register_styles() {
  wp_enqueue_style('evivatheme-style', get_template_directory_uri().'/style.css', ['evivatheme-style-boootstrap'], '1.0');
  wp_enqueue_style('evivatheme-style-boootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '1.0');
  wp_enqueue_style('evivatheme-style-font-awesome', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', [], '1.0');
  wp_enqueue_style('evivatheme-style-tailwind-css', get_template_directory_uri().'/assets/css/content.css', [], '1.0');
}

add_action('wp_enqueue_scripts','evivatheme_register_styles');

function evivatheme_register_scripts() {
  /*true at the end is for placing in the footer*/
  /*Using this function we are going to Embeed React later*/
  /* wp_enqueue_script('evivatheme-script',get_template_directory_uri().'/assets/js', [], '1.0', true); */
}

add_action('wp_enqueue_scripts','evivatheme_register_scripts');

function evivatheme_menus() {
  $locations = [
    'primary' => 'Top Menu',
    'footer' => 'Footer Menu'
  ];
  register_nav_menus($locations);
}

add_action('init', 'evivatheme_menus');
