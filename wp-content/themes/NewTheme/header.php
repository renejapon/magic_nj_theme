<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?> ">
  <title><?php wp_title(); ?> </title>
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<body <?php  body_class(); ?> >
<div id="cont_all_site">
  <section class="block_publi_left  text-center"><!--Inicio banner publi left-->
    <h3>BANNERS LEFT</h3>
  </section><!-- end block_publi_left-->
  <div class="content_main ">
    <header id="block_header">
      <div class="block_header_one">
        <div class="sub_block_logo_site ">
          <?php 
          if ( function_exists( 'the_custom_logo' ) ){ 
          the_custom_logo(); 
          }else{ ?>
              <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
          <?php } ?>
        </div><!-- end sub_block_logo_site -->
        <div class="sub_block_right ">
          <div class="sub_block_right_up ">
            <div class="block_music "><!-- reproducto + redes sociales-->
              <h3>reproductor de musica </h3>
            </div><!-- end block_music-->
            <?php 
            if( has_nav_menu('redes_sociales') ):
              wp_nav_menu( array(
                  'theme_location'    => 'redes_sociales', 
                  'container'         => 'div',
                  'container_class'   => 'menu_social_links ',
                  'container_id'      => 'block_social_links',
                  'menu_class'        => 'menu_items',
                  'menu_id'           => 'menu_items_links',
                  'depth'             => 1,
                  'link_before'       => '<span class="sr-only">',
                  'link_after'        => '</span>',
                  'fallback_cb'       => '',
                  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
              )); 
            else:?>
              <h3>Add menu social links</h3>
            <?php endif; ?>
          </div><!-- end sub_block_right_up -->
          <div class="sub_block_right_down  ">
            <!-- banner principal -->
            <h3>BANNER CABECERA </h3>
          </div><!-- end sub_block_right_down -->
        </div><!-- end sub_block_right-->
      </div><!-- end block_header_one-->
      <nav class="navbar navbar-inverse ">
        <div class="container-fluid">
          <div class="navbar-header mov_btn_menu">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>                        
            </button>
          </div>  <!-- end mobile buttom -->
          <div class="collapse navbar-collapse block_menu_main" id="myNavbar" aria-expanded="false">
            <?php 
            if(has_nav_menu('menu_principal')){
              wp_nav_menu( 
                array(
                  'theme_location'    => 'menu_principal', 
                  'container'         => '',
                  'container_id'      => '',
                  'menu_class'        => 'nav navbar-nav navbar-reverse menu_list_header',

              )); 
            }else{
              echo 'Nav menu not created or asigned..';
            }
            ?>
          </div>
        </div>
      </nav>
    </header>
    <section class="content_site "> <!--Inicio contenido principal-->