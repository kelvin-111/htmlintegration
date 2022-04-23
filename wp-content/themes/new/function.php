 <?php

 function add_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/wp-content/themes/html/css/bootstrap.min.css');

  wp_enqueue_style( 'style', get_template_directory_uri() . '/wp-content/themes/html/css/style.css');
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/wp-content/themes/html/css/responsive.css');
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/wp-content/themes/html/css/owl.carousel.min.css');
  wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/wp-content/themes/html/css/bootstrap-datepicker.min.css');


  wp_enqueue_script( 'script', get_template_directory_uri() . '/wp-content/themes/html//js/script.js');
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );