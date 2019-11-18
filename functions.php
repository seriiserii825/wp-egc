<?php

	require_once __DIR__ . '/inc/carbon-fields/cb.php';
	require_once __DIR__ . '/inc/carbon-fields/cb-post-meta.php';
	require_once __DIR__ . '/inc/func.php';


	// Глобальные настройки
//	if ( function_exists( 'acf_add_options_page' ) ) {
//		// Глобальные настройки сайта
//		acf_add_options_page( array(
//			'page_title' => 'Настройки сайта',
//			'menu_title' => 'Настройки сайта',
//			//			'parent_slug' => $parent['menu_slug'],
//		) );
//	}


	function bs_euconsult_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-top' => 'Top menu',
		) );

		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'bs_euconsult_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}

	add_action( 'after_setup_theme', 'bs_euconsult_setup' );

	function bs_euconsult_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Languages', 'bs-euconsult' ),
			'id'            => 'wpglobus',
			'description'   => esc_html__( 'Add widgets here.', 'bs-euconsult' ),
			'before_widget' => '',
			'after_widget'  => '',
			'before_title'  => '',
			'after_title'   => '',
		) );
	}

	add_action( 'widgets_init', 'bs_euconsult_widgets_init' );

	//Оnключаем сжатие картинок
//	add_filter( 'jpeg_quality', create_function( '', 'return 100;' ) );
