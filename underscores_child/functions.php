<?php 


// Bootstrap



wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/css/bootstrap.min.css' );

wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/js/all.min.js' );