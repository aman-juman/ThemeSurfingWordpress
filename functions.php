<?php

/* Подключение стилей и скриптов */

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
}
add_action( 'wp_enqueue_scripts', 'surfing_scripts' );


/* Регистрация кастомного типапостов с Бордами */
add_action('init', 'register_post_types');
function register_post_types(){
	register_post_type('boards', array(
		'labels'             => array(
			'name'               => 'Борды', // Основное название типа записи
			'singular_name'      => 'Борд', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую борд',
			'edit_item'          => 'Редактировать борд',
			'new_item'           => 'Новая борд',
			'view_item'          => 'Посмотреть борд',
			'search_items'       => 'Найти борд',
			'not_found'          =>  'Бордов не найдено',
			'not_found_in_trash' => 'В корзине борд не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Борды'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array(
																	'title',
																	//'editor',
																	//'author',
																	'thumbnail',
																	//'excerpt',
																	//'comments'
																)
	) );
}

/* Поддержка картинок превью для постов */
add_theme_support( 'post-thumbnails' );



 if (function_exists('add_image_size')){
	 add_image_size('board-slider', 225, 490, true);
 }
