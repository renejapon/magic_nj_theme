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
			while ( have_posts() ) : the_post();
				the_title('<h3 class="">','</h3>');
				the_content() ;
			endwhile;
		endif; ?>

</div><!-- .wrap -->

<?php get_footer();
