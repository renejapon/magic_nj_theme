<?php get_header(); ?>


<div class="container-fluid  col-xs-12 col-sm-12 col-md-9 col-lg-9">
	<article>
		<h3><?php single_cat_title(); ?></h3>
		<p>	<?php 	the_excerpt(); ?></p>
		<p>	<?php 	the_content(); ?></p>
		<?php
switch_to_blog(1);
$site_title = get_bloginfo( 'name' );
$site_url = network_site_url( '/' );
$site_description = get_bloginfo( 'description' );
restore_current_blog();
echo 'The Network Home URL is: ' . $site_url.'<br>';
echo 'The Network Home Name is: ' . $site_title.'<br>';
echo 'The Network Home Tagline is: ' . $site_description.'<br>';
echo get_bloginfo('admin_email');
echo '<br>'.get_bloginfo('version');
echo '<br>'.get_bloginfo('home');
echo '<br>'.get_bloginfo('wpurl');
echo '<br>'.get_bloginfo('html_type');
echo '<br>'.get_bloginfo('text_direction');
echo '<br>'.get_bloginfo('stylesheet_url');
echo '<br>'.get_bloginfo('stylesheet_directory');
echo '<br>'.get_bloginfo('template_url');
echo '<br>'.get_bloginfo('comments_rss2_url');
echo '<br>'.get_bloginfo('siteurl');
echo '<br>'.get_bloginfo('');
echo '<br>'.get_bloginfo('');


?>

	</article>
</div>
<?php get_footer(); ?>