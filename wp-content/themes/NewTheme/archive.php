<?php get_header(); ?>
	<div class="cont_allpost_date">


<h1>archive</h1>
			<div class="category_title">
				<?php
					the_archive_title( '<h3 class="page-title text_front">', '</h1>' );
					the_archive_title( '<h3 class="page-title text_back">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</div><!-- .page-header -->
				<?php while ( have_posts() ): the_post();?>
					<article>
						<h3 class="text_front"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						<a href="<?php the_permalink(); ?>">
							<img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>">
						</a>
						<p><?php the_content(); ?></p>
					</article>
				<?php endwhile; ?>
	



	</div><!-- .wrap -->
<?php get_footer(); ?>
