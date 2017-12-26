<?php get_header(); ?>
	<div class="container">
		<?php get_sidebar(); ?>
		<section class="content">
			<div class="row">
				<h1>"fron-page.php"</h1>
				<article class="">
					<?php $descripcion = get_bloginfo('description','display'); ?>
					<h1 class="site-title"><?php echo $descripcion ?></h1>
				</article>
			</div>
		</section>


	</div>
<?php get_footer(); ?>