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
		<div class="container-fluid  col-xs-9 col-lg-9">
			<section class="row section_musica">
				<article class="descrip_category">
					<h2><?php echo get_cat_name();?></h2>
					<?php echo category_description(); ?> 
				</article>
				<article class="col-4 col-xs-4 col-lg-4">
					<?php the_post_thumbnail(array('class' => 'imag-responsive')); ?>
					<h3><?php the_title(); ?></h3>
					<div class="parraf"> <?php the_content(); ?> </div>
					<p><?php the_time(get_option('date_format')); //opcional ?></p>
				</article>
				<h3>paisana</h3>
			</section>
		</div>

<?php 	get_footer(); ?>