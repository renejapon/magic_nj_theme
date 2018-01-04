<?php get_header(); ?>
<?php 

//id categories

$sec_1_cat_id = 3;
$sec1_post = 3;
$sec_2_cat_id = 5;
$sec2_post = 2;
$sec_3_cat_id = 6;
$sec3_post = 3;

/*

$mypost = new WP_Query($args);
while($mypost->have_posts() ):
$mypost->the_post();
*/

//plugin para asignar numero de articulos y numero de categoria.
?>
	<div class="container-fluid content_main cont_withou_p">
		<section class="block_publi_left col-xs-2 col-lg-2 col-md-2">
			<h3>Aqui va publicidad (left Banners )</h3>
		</section><!-- end block_publi_left-->
		<section class="content_site col-xs-8 col-lg-8">
			<div class="container-fluid  col-xs-9 col-lg-9">
				<section class="row section_musica">
					<article class="descrip_category">
						<h2><?php echo get_cat_name($sec_1_cat_id);?></h2>
						<?php echo category_description( $sec_1_cat_id ); ?> 
					</article>
					<?php
					$mypost = new WP_Query('cat='.$sec_1_cat_id.'&posts_per_page='.$sec1_post);
					while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="col-4 col-xs-4 col-lg-4">
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array('class' => 'imag-responsive')); ?></a>
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="parraf"> <?php the_excerpt(); ?> </div>
						<p><?php the_time(get_option('date_format')); ?></p>
					</article>
					<?php 
					//endforeach; 
					endwhile;
					wp_reset_postdata(); ?>
				</section>
				<section class="row section_conciertos">
					<article class="descrip_category col-12 col-xs-12 col-lg-12">
						<h2><?php echo get_cat_name($sec_2_cat_id);?></h2>
						<?php echo category_description( $sec_2_cat_id ); ?> 
					</article>
					<?php
					$mypost = new WP_Query('cat='.$sec_2_cat_id.'&posts_per_page='.$sec2_post);
					while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="col-6 col-xs-6 col-lg-6">
						<?php the_post_thumbnail(array('class' => 'imag-responsive second_class_img')); ?>
						<div class="cont_hidden">
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="cont_display">
							<p><?php the_excerpt(); ?></p>
							<p><?php the_time(get_option('date_format')); ?></p>
						</div>
					</article>
					<?php 
					//endforeach; 
					endwhile;
					wp_reset_postdata(); ?>
				 
				</section>
				<section class="row section_proximos_eventos">
					<article class="descrip_category">
						<h2><?php echo get_cat_name($sec_3_cat_id);?></h2>
						<?php echo category_description( $sec_3_cat_id ); ?> 
					</article>
					<article class="col-xs-4">
						<div class="cont_art">
							<h3>Titulo form-page</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
						</div>
						<img src="" alt="imagen article" class="img-responsive">
					</article>
					<article class="col-xs-4">
						<div class="cont_art">
							<h3>Titulo form-page</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
						</div>
						<img src="" alt="imagen article" class="img-responsive">
					</article>
					<article class="col-xs-4">
						<div class="cont_art">
							<h3>Titulo form-page</h3>
							<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
						</div>
						<img src="" alt="imagen article" class="img-responsive">
					</article>
				</section>
			</div>
			<?php get_sidebar(); ?>
		</section>
		<section class="block_publi_right col-xs-2 col-lg-2">
			<h3>Aqui va publicidad (right Banners )</h3>
		</section> <!-- end container_publi_right-->
	</div> <!-- end container -->
<?php get_footer(); ?>