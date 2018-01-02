<?php get_header(); ?>
<section class="container contenido">	
	<div class="row">
		<?php 
			while(have_post()): the_post();
				the_content();
			endwhile;

		?>
	</div>
</section>

<?php get_footer(); ?>