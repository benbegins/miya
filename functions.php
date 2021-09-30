
<?php

// Configure les fonctionnalités de bases
function miya_setup(){

    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Ajouts des menus
    register_nav_menus( array(
        'main' => 'Menu Principal',
    ) );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'miya_setup' );

// Ajout des scripts
function miya_register_assets(){

    // CSS
    wp_enqueue_style( 
        'miya', 
        get_stylesheet_uri( ),
        array(),
        '1.0'
    );

    // JS
    wp_enqueue_script( 
        'miya', 
        get_template_directory_uri() . '/dist/app.js', 
        array(),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'miya_register_assets');