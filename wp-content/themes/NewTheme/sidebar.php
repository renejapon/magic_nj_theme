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
