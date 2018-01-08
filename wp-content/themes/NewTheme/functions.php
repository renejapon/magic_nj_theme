<?php
// habilitado para traducciones.
load_theme_textdomain( 'magic_nj' );
//hoja de estilos
function themerj_styles(){
 	wp_enqueue_style('normalize', get_stylesheet_directory_uri().'/rj/css/normalize.css');
 	wp_enqueue_style('fontAwesome', get_stylesheet_directory_uri().'/rj/css/font-awesome.css');
	wp_enqueue_style('bootstrap',  get_stylesheet_directory_uri().'/rj/css/bootstrap.min.css');
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrapjs', get_stylesheet_directory_uri().'/rj/js/bootstrap.min.js');
    wp_enqueue_script('my_jquery', get_stylesheet_directory_uri().'/rj/js/my_jquery.js');

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

//clases para la etiqueta  a
add_filter('nav_menu_link_attributes','nav_item_menu_main',10,3);
function nav_item_menu_main ($atts,$item,$args ) {
    $class = 'nav-link';
    $atts['class'] = $class ;
    return $atts;
}



add_theme_support( 'custom-logo' );

add_image_size( 'magic_nj-featured-image', 2000, 1200, true );

add_image_size( 'magic_nj-thumbnail-avatar', 100, 100, true );

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


//imageenes entradas
add_theme_support('post-thumbnails');
  
//true corta la imagen y la centra
add_image_size('entradas',750,490, true);  




//default featur image

function dfi_add_class($html, $post_id, $default_thumbnail_id, $size, $attr) {
    // add a class to the existing class list
    $attr['class'] .= ' my-class';

    return wp_get_attachment_image( $default_thumbnail_id, $size, false, $attr );
}
add_filter( 'dfi_thumbnail_html', 'dfi_add_class', 10, 5 );




/**
 * Register widget area.
 *
 * @since Twenty Fifteen 1.0
 *
 * @link https://codex.wordpress.org/Function_Reference/register_sidebar
 */
function magic_nj_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'SIDEBAR', 'magic_nj' ),
        'id'            => 'sidebar',

        'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'magic_nj' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 1', 'magic_nj' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Add widgets here to appear in your footer.', 'magic_nj' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 2', 'magic_nj' ),
        'id'            => 'sidebar-3',
        'description'   => __( 'Add widgets here to appear in your footer.', 'magic_nj' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Footer 3', 'magic_nj' ),
        'id'            => 'sidebar-4',
        'description'   => __( 'Add widgets here to appear in your footer.', 'magic_nj' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'magic_nj_widgets_init' );



    /*
     * Enable support for Post Formats.
     *
     * See: https://codex.wordpress.org/Post_Formats
     */
    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ) );


    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

