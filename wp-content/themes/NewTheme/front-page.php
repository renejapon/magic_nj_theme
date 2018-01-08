<?php 
	get_header(); 
	//Numero de articulos y categorias
	$sec_1_cat_id = 3; 	//category ID
	$sec1_post = 3; 	//N entradas
	$sec_2_cat_id = 5;
	$sec2_post = 2;
	$sec_3_cat_id = 6;
	$sec3_post = 3;

	/*
	IDEAS 

	$mypost = new WP_Query($args);
	while($mypost->have_posts() ):
	$mypost->the_post(); 
	---> codig para mostrar la seccion de todas las entradas de la web. 

	---> CREAR PLUGIN para asignar numero de articulos y numero de categoria para cada seccion de page-front.php.

	*/

/*
 *
 * The template for front page
 *
 * @package MagicNg
 * @subpackage MagicNg
 * @since MagicNg 1.0
 */
?>
			<?php if(is_front_page() ): //mostrará los articulos solo en el front page?>
			    <section class="row block_slider_portada col-lg-12">
			      <?php $slider_p1= 5;  ?>
			      <?php $mypost = new WP_Query('cat='.$slider_p1.'&posts_per_page=1'); while($mypost->have_posts() ): $mypost->the_post(); ?>
			        <article class="block_arti_p1 col-lg-6">
			          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'img-responsive')); ?></a>
			          <div class="arraf">
			            <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			            <?php the_excerpt(); ?>
			            <p><?php the_time(get_option('date_format')); ?></p>
			          </div>
			        </article>
			      <?php endwhile; wp_reset_postdata(); ?>
			      <?php $slider_p2= 6;  ?>
			      <?php $mypost = new WP_Query('cat='.$slider_p2.'&posts_per_page=1'); while($mypost->have_posts() ): $mypost->the_post(); ?>
			        <article class="block_arti_p1 col-lg-3">
			          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'img-responsive')); ?></a>
			          <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			          <p><?php the_time(get_option('date_format')); ?></p>
			        </article>
			      <?php endwhile; wp_reset_postdata(); ?>
			      <div class="block_double col-lg-3">
			        <?php $slider_p2= 3;  ?>
			      <?php $mypost = new WP_Query('cat='.$slider_p2.'&posts_per_page=2'); while($mypost->have_posts() ): $mypost->the_post(); ?>
			        <article class="block_p3_">
			          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'img-responsive')); ?></a>
			          <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			          <p><?php the_time(get_option('date_format')); ?></p>
			        </article>
			      <?php endwhile; wp_reset_postdata(); ?>
			      </div>
			    </section>
			<?php endif; ?>
			<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9 block_content">
				<section class="row section_musica">
					<article class="descrip_category">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($sec_1_cat_id); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($sec_1_cat_id); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$sec_1_cat_id.'&posts_per_page='.$sec1_post); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="col-12 col-xs-6 col-lg-4">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'posts_front img-responsive')); ?></a>
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="parraf"><?php the_excerpt(); ?></div>
						<p><?php the_time(get_option('date_format')); ?></p>
					</article>
					<?php endwhile; wp_reset_postdata(); ?>
				</section>
				<section class="row section_conciertos">
					<article class="descrip_category col-12 col-xs-12 col-lg-12">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($sec_2_cat_id); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($sec_2_cat_id); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$sec_2_cat_id.'&posts_per_page='.$sec2_post); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="col-6 col-xs-6 col-lg-6">
						<?php the_post_thumbnail(array('class' => 'img-responsive second_class_img')); ?>
						<div class="cont_hidden">
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="cont_display">
							<p><?php the_excerpt(); ?></p>
							<p><?php the_time(get_option('date_format')); ?></p>
						</div>
					</article>
					<?php endwhile; wp_reset_postdata(); ?>			 
				</section>
				<section class="row section_proximos_eventos">
					<article class="descrip_category">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($sec_3_cat_id); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($sec_3_cat_id); ?></h3>
						</div>
					</article>
						<?php $mypost = new WP_Query('cat='.$sec_3_cat_id.'&posts_per_page='.$sec3_post); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="col-6 col-xs-6 col-lg-6">
						<?php the_post_thumbnail(array('class' => 'img-responsive second_class_img')); ?>
						<div class="cont_hidden">
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="cont_display">
							<p><?php the_excerpt(); ?></p>
							<p><?php the_time(get_option('date_format')); ?></p>
						</div>
					</article>
					<?php endwhile; wp_reset_postdata(); ?>
				</section>
			</div>
<?php get_footer(); ?>