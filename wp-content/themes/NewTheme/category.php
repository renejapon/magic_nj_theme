<?php 
/**
* The template for categories
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
**/
get_header(); ?>


<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<article>
		<div class="title_category">
			<h3 class="text_front"><?php single_cat_title(); ?></h3>
			<h3 class="text_back"><?php single_cat_title(); ?></h3>
		</div>
		<img src="<?php echo get_template_directory_uri() . '/rj/images/slider1.jpg'; ?>" class="img-responsive" /><br/>
		<p><?php echo category_description(); ?></p>
		image in media galery <br>
		<?php
		$img_an = 600;
		$img_al = 600;
		echo wp_get_attachment_image( 55,array($img_an,$img_al) ); 

		?>
	</article>
</div>
<?php get_footer(); ?>