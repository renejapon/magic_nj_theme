<?php 
/**
* The template for categories
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
**/
get_header(); ?>
<div class="cont_all_categories ">
		<div class="title_category">
			<h3 class="text_front"><?php single_cat_title(); ?></h3>
			<h3 class="text_back"><?php single_cat_title(); ?></h3>
		</div>
	<?php 
		while(have_posts() ): the_post(); 
	?>
	<article>
	<?php 	
		the_title('<h2>','</h2>');
		the_post_thumbnail();
		the_content(); 
	?>	
	</article>
	<?php endwhile; ?>


</div>
<?php get_footer(); ?>