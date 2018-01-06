<?php
/**
*
* The template for displaying 404 pages (not found)
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
*/
get_header(); ?>
	<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9">
		<main id="main" class="site-main" role="main">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'MagicNg' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'MagicNg' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->
		</main><!-- .site-main -->
	</div><!-- .content-area -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
