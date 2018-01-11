<?php 
/**
*
* The template for single php
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
*/

get_header(); ?>
		<div class="container-fluid ">
			<section class="row section_musica">
				<article class="">
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>">
					</a>
					<h3><?php the_title(); ?></h3>
					<div class="parraf"> <?php the_content(); ?> </div>
					<p><?php the_time(get_option('date_format')); //opcional ?></p>
				</article>
			</section>
		</div>
<?php 	get_footer(); ?> 