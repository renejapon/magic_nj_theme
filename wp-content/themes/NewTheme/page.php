<?php 
/**
* The template for categories
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
**/
get_header(); ?>
	<div class="container-fluid content_main col-xs-12 col-sm-12 col-md-9 col-lg-9">

		<article class="history_magic_ng">
			<div class="title_category">
				<h3 class="text_front"><?php the_title(); ?></h3>
				<h3 class="text_back"><?php the_title(); ?></h3>
			</div>
			<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="magic_image_about">
		</article>



	</div>
<?php get_footer(); ?>