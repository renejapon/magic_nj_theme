<?php 
/**
* Template: Categories
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
**/
get_header(); ?>
	<div class="cont_all_pages ">

		<article class="history_magic_ng">
			<div class="title_category">
				<h3 class="text_front"><?php the_title(); ?></h3>
				<h3 class="text_back"><?php the_title(); ?></h3>
			</div>
		<?php while(have_posts() ): the_post(); ?>
			<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
			<?php 
				//the_post_thumbnail_url();
				the_content(); 
				the_permalink();

			?>
		<?php endwhile; ?>
		</article>
	






	</div>
<?php get_footer(); ?>