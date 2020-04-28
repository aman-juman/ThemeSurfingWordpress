<?php

function surfing_scripts() {
	wp_enqueue_style( 'surfing-style', get_stylesheet_uri() );
  wp_enqueue_style( 'surfing-gfonts', 'https://fonts.googleapis.com/css?family=Fira+Sans|Playfair+Display:400,700|Poppins:300&display=swap' );
  wp_enqueue_style( 'surfing-fontsSpartan', get_template_directory_uri() . '/fonts/league-spartan/league-spartan.css');
  wp_enqueue_style( 'surfing-owlCarousel', get_template_directory_uri() . '/libs/owl-carousel2/assets/owl.carousel.min.css');
  wp_enqueue_style( 'surfing-owlCarouselTheme', get_template_directory_uri() . '/libs/owl-carousel2/assets/owl.theme.default.min.css');
  // wp_enqueue_script(
  //   'jquery',
  //    get_template_directory_uri() . '/libs/jquery/jquery.min.js',
  //    array(), '',true
  //  );
   wp_enqueue_script(
     'owlCarousel',
      get_template_directory_uri() . '/libs/owl-carousel2/owl.carousel.min.js',
      array('jquery'), '',true
    );
    wp_enqueue_script(
      'mainJS',
       get_template_directory_uri() . '/js/main.js',
       array('jquery', 'owlCarousel'), '',true
     );
     wp_enqueue_script(
       'header-slider',
        get_template_directory_uri() . '/js/header-slider.js',
        array('jquery', 'owlCarousel'), '',true
      );
      wp_enqueue_script(
        'shop-slider',
         get_template_directory_uri() . '/js/shop-slider.js',
         array('jquery', 'owlCarousel'), '',true
       );








	// wp_style_add_data( 'surfing-style', 'rtl', 'replace' );
  //
	// wp_enqueue_script( 'surfing-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
  //
	// wp_enqueue_script( 'surfing-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), _S_VERSION, true );
  //
	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'surfing_scripts' );
