<?php get_header(); ?>
<?php 

//id categories

$sec_1_cat_id = 3;
$sec_2_cat_id = 5;
$sec_3_cat_id = 6;

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
						$args = array(
							'posts_per_page'   => 3

						); 
						$query = new WP_Query($args); 
					?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<article class="col-xs-4 post_entradas">
					<!-- Display the Title as a link to the Post's permalink. -->
						<?php the_post_thumbnail('entradas', array('class' => 'img-responsive')); ?>
						<div class="cont_arti">
							<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<div class="parraf"> <?php the_content(); ?> </div>
							<small class="date_article"><?php the_time( 'F jS, Y' ); ?> by <?php the_author_posts_link(); ?>	</small>
							<p class="postmetadata"><?php esc_html_e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
						</div>
					</article> <!-- closes the first div box -->

					<?php endwhile; wp_reset_postdata();
					else : ?>
						<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
					<?php endif; ?>
					<div>
						Categories list : 
						<?php  $categorias = get_categories(); ?>
						<?php foreach($categorias as $categoria): ?>
						<?php echo '<br>'.$categoria->name.'<br>'; ?>
						<?php echo get_category_link($categoria->cat_ID).'<br>'; ?>
						<?php echo $caregoria->description.'<br>'; ?>
					<?php endforeach; ?>
					</div>
				</section>
				<section class="row section_conciertos">
					<article class="descrip_category col-12 col-xs-12 col-lg-12">
						<h2><?php echo get_cat_name($sec_2_cat_id);?></h2>
						<?php echo category_description( $sec_2_cat_id ); ?> 
					</article>
					<article class="col-xs-6 col-lg-6 col-6 text-center">
						<h3>Titulo</h3>
						<img src="" alt="imagen fondo" class="img-responsive">
						<div class="contenthide">
							<h3>titulo hover</h3>
							<a href="">Leer más</a>
						</div>
						<span>fecha: 27/07/2017</span>
					</article>
					<article class="col-xs-6 col-lg-6 col-6 text-center ">
						<h3>Titulo</h3>
						<img src="" alt="imagen fondo" class="img-responsive">
						<div class="contenthide">
							<h3>titulo hover</h3>
							<a href="">Leer más</a>
						</div>
						<span>fecha: 27/07/2017</span>
					</article> 
				 
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