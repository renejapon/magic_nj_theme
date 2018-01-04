<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?> ">
  <title><?php wp_title(); ?> </title>
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri();?>/favicon.ico" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php  body_class(); ?> >
  <header class="col-12 col-xs-12 col-lg-12">
    <div class="block_header_one col-12 col-xs-12 col-lg-12">
      <div class="sub_block_logo_site col-2 col-xs-2 col-lg-2">
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); }else{ ?>
            <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
      </div><!-- end sub_block_logo_site -->
      <div class="sub_block_right col-9 col-xs-9 col-lg-9">
        <div class="sub_block_right_up col-12 col-xs-12 col-lg-12">
          <!-- reproducto + redes sociales-->
          <div class="block_music col-8 col-xs-8 col-lg-8">
            <h3>reproductor de musica </h3>
          </div><!-- end block_music-->
          <?php 
            wp_nav_menu( array(
                'theme_location'    => 'redes_sociales', 
                'container'         => 'div',
                'container_class'   => 'menu_social_links col-4 col-xs-4 col-lg-4',
                'container_id'      => 'block_social_links',
                'menu_class'        => 'menu_items',
                'menu_id'           => 'menu_items_links',
                'depth'             => 1,
                'link_before'       => '<span class="s-only">',
                'link_after'        => '</span>',
                'fallback_cb'       => '',
                'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'

            )); 
          ?> 
        </div><!-- end sub_block_right_up -->
        <div class="sub_block_right_down col-12 col-xs-12 col-lg-12">
          <!-- banner principal -->
          <h3>BANNER CABECERA </h3>
        </div><!-- end sub_block_right_down -->
      </div><!-- end sub_block_right-->
    </div><!-- end block_header_one-->
    <nav class="navbar navbar-inverse col-12 col-xs-12 col-lg-12">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div class="collapse navbar-collapse block_menu_main" id="myNavbar" aria-expanded="false">
          <?php 
            wp_nav_menu( 
              array(
                'theme_location'    => 'menu_principal', 
                'container'         => '',
                'container_id'      => '',
                'menu_class'        => 'nav navbar-nav navbar-reverse',

            )); 
          ?>
        </div>
      </div>
    </nav>
  </header>
<div class="clearfix"></div>
