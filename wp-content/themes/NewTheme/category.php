<?php get_header(); ?>


<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<article>
		<img src="<?php echo get_template_directory_uri() . '/rj/images/slider1.jpg'; ?>" class="img-responsive" /><br/>
		<h3>Category: <?php single_cat_title(); ?></h3>
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