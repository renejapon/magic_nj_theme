<?php get_header(); ?>

<div class="container">
	<?php  get_sidebar()?>
	<section class="row">
		<article class="">
			<?php $descripcion = get_bloginfo('description','display'); ?>
			<h1 class="site-title"><?php echo $descripcion ?></h1>
		</article>
	</section>






</div>
<?php get_footer(); ?>