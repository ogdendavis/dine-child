<?php
// Start a session, so we can remember when the user closes the hello bar ad
if ( !session_id() ) {
  session_start();
  $_SESSION['hello_bar'] = True;
}

function dine_child_enqueue_theme_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'), wp_get_theme()->get('Version'));
}
add_action( 'wp_enqueue_scripts', 'dine_child_enqueue_theme_styles' );
