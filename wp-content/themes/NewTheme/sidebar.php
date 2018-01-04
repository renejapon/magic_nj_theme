<aside id="sidebar" class="sidebar col-xs-3 col-lg-3">	
	<section class="row block_new_post">
		<h2>Aquí va el sidebar.</h2>
		<article>
			<a href="link post"> <img src="" alt="imagen article" class="img-responsive"></a>
			<h3><a href="link post">titulo post</a></h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
		</article>
		<article>
			<a href="link post"> <img src="" alt="imagen article" class="img-responsive"></a>
			<h3><a href="link post">titulo post</a></h3>
			<p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur eveniet, adipisci quo molestiae, voluptatum iure quae maiores in, optio saepe dolor eum veniam unde voluptates iusto! Error aut numquam enim. </p>
		</article>
		<article>
				Categories list(imprime categorias que estan asiganadas 
				) : 
				<?php  $categorias = get_categories(); ?>
				<?php foreach($categorias as $categoria): ?>
				<?php echo '<h2><a href="'.get_category_link($categoria->cat_ID).'" title="'.$categoria->name.'">'.$categoria->name.'</a></h2>'; ?>
				<?php echo category_description($categoria->cat_ID); 		//descripción categoria	?>
			<?php endforeach; ?>
		</article>
	</section>
	

</aside>
