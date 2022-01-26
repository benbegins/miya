
<?php

// Configure les fonctionnalités de bases
function miya_setup(){

    // Prise en charge des images de mise en avant
    add_theme_support('post-thumbnails');

    // Ajouter automatiquement le titre du site dans l'entete
    add_theme_support('title-tag');

    // Woocommerce theme support 
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-slider' );

    // Ajouts des menus
    register_nav_menus( array(
        'main'      => 'Menu Principal',
        'footer'    => 'Menu Footer',
    ) );

    // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

}
add_action( 'after_setup_theme', 'miya_setup' );

// Ajout des scripts
function miya_register_assets(){

    // CSS
    wp_enqueue_style( 
        'style', 
        get_stylesheet_uri( ),
        array(),
        '1.0'
    );

    // JS
    wp_enqueue_script( 
        'vue', 
        'https://unpkg.com/vue@3.2.20', 
        array(),
        '1.0',
        true
    );
    wp_enqueue_script( 
        'app', 
        get_template_directory_uri() . '/dist/app.js', 
        array('vue'),
        '1.0',
        true
    );

}
add_action( 'wp_enqueue_scripts', 'miya_register_assets');


// Custom image size
add_image_size( 'xl', 1440);
add_image_size( 'xxl', 1900);

// Woocommerce
require get_template_directory() . '/inc/woocommerce.php';

//Disable plugin auto-update email notification
add_filter('auto_plugin_update_send_email', '__return_false');