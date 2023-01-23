<?php
	wp_enqueue_style( 
    'lafermealarmure-style',
     get_template_directory_uri() . '../css/style.css',
    array(),
    '1.0' 
  );

  wp_enqueue_script(
     'lafermealarmure-scripts', get_template_directory_uri() . '../dist/js/scripts.js', array(), '', true );
 

  function laferme_setup() {
    //image msie en avant
    add_theme_support( 'post-thumbnails' );

      // code valide pour HTML5.
  add_theme_support(
    'html5',
    array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
      'style',
      'script',
    )
  );
      //Balise titre du document.
    add_theme_support( 'title-tag' );
      //permet la prise en charge d'un logo personnalisé.
    add_theme_support( 'custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ) );

  }

  function laferme_menus() {
    register_nav_menus( array(
      'main-menu' => esc_html__( 'En-tête de page', 'lafermealarmure' ),
      'footer-menu' => esc_html__( 'Pied de page', 'lafermealarmure' )
    ) );
  }

  ?>