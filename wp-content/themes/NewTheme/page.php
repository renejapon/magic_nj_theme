<?php 
/**
* Template: Categories
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
**/
get_header(); ?>
	<div class="container-fluid content_main ">
		<article class="history_magic_ng">
			<div class="title_category">
				<h3 class="text_front"><?php the_title(); ?></h3>
				<h3 class="text_back"><?php the_title(); ?></h3>
			</div>
		<?php while(have_posts() ): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
		</article>
	</div>
<?php get_footer(); ?>