<?php

function my_theme_enqueue_styles() {

	wp_enqueue_style( 'bootstrap_css', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css?family=Laila:400,700|Lato|Julius+Sans+One' );

    $parent_style = 'blankslate-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

	wp_enqueue_style( 'less-style', get_stylesheet_directory_uri() . '/less.less' );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function theme_js() {

	global $wp_scripts;

    wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array( 'jquery' ) );
    wp_enqueue_script( 'ripples_js', get_stylesheet_directory_uri() . '/scripts/jquery-ripples-min.js', array( 'jquery' )  );
    wp_enqueue_script( 'script_js', get_stylesheet_directory_uri() . '/scripts/script.js', array( 'jquery' )  );
}

add_action( 'wp_enqueue_scripts', 'theme_js');

?>