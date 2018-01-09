<?php get_header(); ?>

<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9">
		

		<div class="category_title">
			<?php
				the_archive_title( '<h3 class="page-title text_front">', '</h1>' );
				the_archive_title( '<h3 class="page-title text_back">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
		</div><!-- .page-header -->

		<?php
		if ( have_posts() ) : ?>
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();?>
				<article>
					<h3 class="text_front"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<a href="<?php the_permalink(); ?>"><img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" class="img-responsive image_post_id_<?php echo get_the_ID(); ?>" alt="<?php the_title_attribute(); ?>"></a>
					<p><?php the_content() ; ?></p>
				</article>
			<?php endwhile;
		endif; ?>

</div><!-- .wrap -->

<?php get_footer();
