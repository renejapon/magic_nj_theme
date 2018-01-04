<?php 	get_header(); ?>
		<div class="container-fluid  col-xs-9 col-lg-9">
			<section class="row section_musica">
				<article class="descrip_category">
					<h2><?php echo get_cat_name($sec_1_cat_id);?></h2>
					<?php echo category_description( $sec_1_cat_id ); ?> 
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