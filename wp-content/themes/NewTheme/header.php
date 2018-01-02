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
  <h1>
    <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
  </h1>

  <header>
    <div class="block_header_one">
      <div class="sub_block_logo">
        <!-- logo theme -->
        <?php 
        if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
        }else{?>
          <a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a>
        <?php
        }
        ?>
      </div>
      <div class="sub_block_right">
        <div class="sub_br_up">
          <!-- reproducto + redes sociales-->
          <div class="block_music">
            <h3>reproductor de musica </h3>
          </div>
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
        </div>
        <div class="sub_br_down">
          <!-- banner principal -->
          <h3>banner principal</h3>
        </div>
      </div>
    </div>
    <?php 
      wp_nav_menu( 
        array(
          'theme_location'    => 'menu_principal', 
          'container_class'   => 'navbatr-collapse',
          'container_id'      => 'navbarhome',
          'menu_class'        => 'nav navbar-nav navbar-right'
      )); 
    ?>
  </header>

