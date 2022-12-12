<?php

wp_enqueue_style( 'main-style', get_stylesheet_uri() );
wp_enqueue_style( 'boostrap-style',  get_template_directory_uri() . '/assect/js/bootstrap.min.js' );
wp_enqueue_script( 'script-name', get_template_directory_uri() .'assect/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support(  'custom-logo' );
add_theme_support(  'post-thumbnails' );
?>