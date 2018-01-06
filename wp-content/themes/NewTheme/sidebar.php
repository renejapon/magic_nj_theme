<?php 
/**
*
* The template for sidebar
*
* @package MagicNg
* @subpackage MagicNg
* @since MagicNg 1.0
*/
?>
<aside id="sidebar" class="sidebar col-xs-12 col-sm-12 col-md-3 col-lg-3">	
	<section class="row block_new_post">
		<h2><?php 	get_categories('name'); ?></h2>
		<?php 	
		while( have_posts() ): the_post();  ?>
		<?php 	the_title('<h3>','</h3>'); ?>
		<?php 	endwhile;wp_reset_postdata(); ?>
		<article>
			<a href="link post"> <img src="" alt="imagen article" class="img-responsive"></a>
			<h3><a href="link post">titulo post</a></h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
		</article>
		<article>
				<h3>Categorias</h3>
				<?php  $categorias = get_categories(); ?>
				<?php foreach($categorias as $categoria): ?>
				<?php echo '<h2><a href="'.get_category_link($categoria->cat_ID).'" title="'.$categoria->name.'">'.$categoria->name.'</a></h2>'; ?>
				<?php echo category_description($categoria->cat_ID); 		//descripción categoria	?>
			<?php endforeach; ?>
		</article>
	</section>
	

</aside>
