<?php

add_theme_support('menus');

function mywp_stylesheets() {

      wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
      wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
      wp_enqueue_style('bootstrap-grid', get_template_directory_uri() . '/css/bootstrap-grid.css');

      var_dump(get_template_directory_uri());
}

add_action('wp_enqueue_scripts', 'mywp_stylesheets');


// register menus.

function mywp_register_menu() {
      register_nav_menus(
            array(
                  'primary-menu' => 'Primary Menu',

            )
      );
}

add_action('init', 'mywp_register_menu');