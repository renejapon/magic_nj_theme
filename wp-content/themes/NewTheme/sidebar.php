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
<?php if ( is_active_sidebar( 'sidebar' ) ) : ?>
	<div id="newposts_sidebar" class="primary-sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar' ); ?>
	</div><!-- #primary-sidebar -->
<?php endif; ?>
	

</aside>
