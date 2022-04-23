 <?php

 function add_theme_scripts() {
  //wp_enqueue_style( 'style', get_stylesheet_uri() );
  
  wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/wp-content/themes/html/css/bootstrap.min.css' , array() );

  wp_enqueue_style( 'cus-style', get_template_directory_uri() . '/css/style.css', array() );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/wp-content/themes/html/css/responsive.css' , array() );
  wp_enqueue_style( 'owl', get_template_directory_uri() . '/wp-content/themes/html/css/owl.carousel.min.css' , array() );
  wp_enqueue_style( 'datepicker', get_template_directory_uri() . '/wp-content/themes/html/css/bootstrap-datepicker.min.css' , array() );


  wp_enqueue_script( 'script', get_template_directory_uri() . '/wp-content/themes/html/js/script.js' , array() );
  
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );