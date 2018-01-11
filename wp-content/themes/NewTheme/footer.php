			<?php get_sidebar(); ?>
		</section><!--fin contenido principal-->
		<footer>
				<section id="footer_banner col-lg-12">
					<h2>aqui va el banner del footer.</h2>
				</section>
				<section id="footer_content">
					<article class="box_foo_1 foo_logo ">
						<?php if ( function_exists( 'the_custom_logo' ) ): 
				          	the_custom_logo(); 
				          	if( has_nav_menu('redes_sociales') ):
				          	wp_nav_menu( array(
				                  'theme_location'    => 'redes_sociales', 
				                  'container'         => 'div',
				                  'container_class'   => 'menu_social_links ',
				                  'container_id'      => 'block_social_links',
				                  'menu_class'        => 'nav_social_links',
				                  'menu_id'           => 'menu_items_links',
				                  'depth'             => 1,
				                  'link_before'       => '<span class="sr-only">',
				                  'link_after'        => '</span>',
				                  'fallback_cb'       => '',
				                  'items_wrap'        => '<ul id="%1$s" class="%2$s">%3$s</ul>'
				            ));	
				          	else:?>
				          	<h3>Add menu social links</h3>
				          	<?php endif;
				        else:?>
							<h1><a href="<?php echo get_option('home'); ?>"><?php bloginfo('name'); ?></a></h1>
						<?php endif; ?> 
					</article>
					<article class="box_foo_2 ">
						<?php if(is_active_sidebar('widget_title_footer_two') ):
							dynamic_sidebar('widget_title_footer_two');
						else: ?>
							<h2>Footer 2 f</h2>
						<?php endif; ?>
					</article>
					<article class="box_foo_3 ">
						<?php if(is_active_sidebar('widget_title_footer_three') ):
							dynamic_sidebar('widget_title_footer_three');
						else: ?>
							<h2>Footer 3 f</h2>
						<?php endif; ?>
					</article>
				</section>
				

		</footer>
	</div> <!-- end container -->
	<section class="block_publi_right text-center"><!--Inicio banner publi right-->
		<h3>BANNERS RIGHT</h3>
	</section> <!-- end container_publi_right-->
</div> <!-- END CONTINER CONTENT  -->
<?php wp_footer(); ?>
</body>
</html>

