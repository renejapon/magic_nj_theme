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
  <header >
    <div class="block_header_one">
      <div class="sub_block_logo_site">
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo(); }else{ ?>
            <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php } ?>
      </div><!-- end sub_block_logo_site -->
      <div class="sub_block_right">
        <div class="sub_block_right_up">
          <!-- reproducto + redes sociales-->
          <div class="block_music">
            <h3>reproductor de musica </h3>
          </div><!-- end block_music-->
          <?php 
            wp_nav_menu( array(
                'theme_location'    => 'redes_sociales', 
                'container'         => 'div',
                'container_class'   => 'menu_social_links',
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
        <div class="sub_block_right_down">
          <!-- banner principal -->
          <h3>banner principal</h3>
        </div><!-- end sub_block_right_down -->
      </div><!-- end sub_block_right-->
    </div><!-- end block_header_one-->
    <nav class="navbar navbar-inverse ">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>                        
          </button>
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
          <?php 
            wp_nav_menu( 
              array(
                'theme_location'    => 'menu_principal', 
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'myNavbar',
                'menu_class'        => 'nav navbar-nav',

            )); 
          ?>
      </div>
    </nav>
  </header>
<div class="clearfix"></div>
