<?php 
	get_header(); 
	//Numero de articulos y categorias
	$cat_id_sec1 = 3; 	//category ID
	$sec1_posts = 3; 	//N entradas
	$cat_id_sec2 = 4;
	$sec2_posts = 2;
	$cat_id_sec3=5;
	$sec3_posts= 3 ;
	$cat_id_sec4 = 6;
	$sec4_posts = 4;
/**
 * The template for front page
 *
 * @package MagicNg
 * @subpackage MagicNg
 * @since MagicNg 1.0
 */
?>
			<?php if(is_front_page() ): //mostrará los articulos solo en el front page?>
			    <section class=" block_slider_portada ">
			      <?php $slider_p1= 5;  ?>
			      <?php $mypost = new WP_Query('cat='.$slider_p1.'&posts_per_page=1'); while($mypost->have_posts() ): $mypost->the_post(); ?>
			        <article class="block_arti_big ">
			          <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
			          <div class="arraf">
			            <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			            <?php the_excerpt(); ?>
			            <p><?php the_time(get_option('date_format')); ?></p>
			          </div>
			        </article>
			      <?php endwhile; wp_reset_postdata(); ?>
			      <?php $slider_p2= 6;  ?>
			      <?php $mypost = new WP_Query('cat='.$slider_p2.'&posts_per_page=1'); while($mypost->have_posts() ): $mypost->the_post(); ?>
			        <article class="block_arti_medium ">
			          <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
			          <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
			          <p><?php the_time(get_option('date_format')); ?></p>
			        </article>
			      <?php endwhile; wp_reset_postdata(); ?>
			      <div class="block_article_double">
			        <?php $slider_p2= 3;  ?>
				      <?php $mypost = new WP_Query('cat='.$slider_p2.'&posts_per_page=2'); while($mypost->have_posts() ): $mypost->the_post(); ?>
				        <article class="double_sub_art_0<?php echo $i; ?>">
				          <a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
				          <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
				          <p><?php the_time(get_option('date_format')); ?></p>
				        </article>
				        <?php $i++; ?>
				      <?php endwhile; wp_reset_postdata(); ?>
			      </div>
			    </section>
			<?php endif; ?>
			<div class=" block_content_main_left">
				<section class=" music_section">
					<article class="descrip_category">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($cat_id_sec1); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($cat_id_sec1); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$cat_id_sec1.'&posts_per_page='.$sec1_posts); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="sm_art_0<?php echo $a; ?>">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<div class="parraf"><?php the_excerpt(); ?></div>
						<p><?php the_time(get_option('date_format')); ?></p>
					</article>
					<?php $a++; endwhile; wp_reset_postdata(); ?>
				</section>
				<section class=" concierto_section">
					<article class="descrip_category ">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($cat_id_sec2); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($cat_id_sec2); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$cat_id_sec2.'&posts_per_page='.$sec2_posts); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="cm_art_0<?php echo $j; ?> ">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
						<div class="cont_hidden">
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						</div>
						<div class="cont_display">
							<?php the_excerpt(); ?>
							<p><?php the_time(get_option('date_format')); ?></p>
						</div>
					</article>
					<?php $j++; endwhile; wp_reset_postdata(); ?>			 
				</section>
				<section class=" music_section">
					<article class="descrip_category">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($cat_id_sec3); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($cat_id_sec3); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$cat_id_sec3.'&posts_per_page='.$sec3_posts); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="sm_art_0<?php echo $q; ?>	">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
						<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<?php the_excerpt(); ?>
						<p><?php the_time(get_option('date_format')); ?></p>
					</article>
					<?php $q++; endwhile; wp_reset_postdata(); ?>
				</section>
				<section class=" next_events_secction">
					<article class="descrip_category">
						<div class="title_category">
							<h3 class="text_front"><?php echo get_cat_name($cat_id_sec4); ?></h3>
							<h3 class="text_back"><?php echo get_cat_name($cat_id_sec4); ?></h3>
						</div>
					</article>
					<?php $mypost = new WP_Query('cat='.$cat_id_sec4.'&posts_per_page='.$sec4_posts); while($mypost->have_posts() ): $mypost->the_post(); ?>
					<article class="nxevs_art_0<?php echo $nxevs; ?> ">
						<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
						<div class="cont_article">
							<h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<p><?php the_time(get_option('date_format')); ?></p>
						</div>
					</article>
					<?php $nxevs++; endwhile; wp_reset_postdata(); ?>

				</section>
			</div>
<?php get_footer(); ?>