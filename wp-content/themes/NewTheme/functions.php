<?php


//hoja de estilos
function themerj_styles(){
 	wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/rj/css/normalize.css');
 	wp_enqueue_style('fontAwesome', get_stylesheet_directory_uri().'/rj/css/font-awesome.css');
	wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrapjs', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js", array('jqery'), '3.3.7', true);

 	wp_enqueue_style('style', get_stylesheet_uri() );
 	wp_enqueue_style('styles', get_stylesheet_directory_uri().'/rj/css/styles.css');

}

//para que funcione la funcion them_styles();
add_action('wp_enqueue_scripts', 'themerj_styles');


 //navegación (menu)

register_nav_menus(array(
	'menu_principal' =>__('Menu Principal' , 'ThemeRJ'),
	'redes_sociales' =>__('Menu Redes Sociales' , 'ThemeRJ')

));

add_theme_support( 'custom-logo' );

//logo support theme
function theme_custom_logo() {
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'theme_custom_logo' );

