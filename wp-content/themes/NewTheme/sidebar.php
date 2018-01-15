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
<aside id="sidebar" class="sidebar ">
	<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
		<div id="newposts_sidebar" class="primary-sidebar widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div><!-- #primary-sidebar -->
	<?php else: ?>
		<h3>Sidebar is not active.</h3>
	<?php endif; ?>
	











</aside>
