<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset= <?php bloginfo( 'charset' ); ?> ">
  <title><?php wp_title(); ?> </title>
  <meta name="viewport" content="width=device-width, minimum-scale=1">
  <link rel="shortcut icon" href=" <?php echo get_stylesheet_directory_uri();?>/favicon.ico" />
  <link rel="stylesheet" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <?php wp_head(); ?>
</head>
<?php 
  //base uri images. 
  $baseimag= "rj/images/"; 

?>
<body <?php  body_class(); ?> >
    <header class="container-fluid">
      <h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
      <hr>
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
        <a class="navbar-brand" href="#myPage">Logo</a>
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
  
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="<?php echo $baseimag ?>slider1.jpg" alt="New York" width="1200" height="700">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>The atmosphere in New York is lorem ipsum.</p>
        </div>      
      </div>

      <div class="item">
        <img src="chicago.jpg" alt="Chicago" width="1200" height="700">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago - A night we won't forget.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="la.jpg" alt="Los Angeles" width="1200" height="700">
        <div class="carousel-caption">
          <h3>LA</h3>
          <p>Even though the traffic was a mess, we had the best time playing at Venice Beach!</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
