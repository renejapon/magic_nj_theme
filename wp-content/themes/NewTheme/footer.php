			<?php get_sidebar(); ?>
		</section><!--fin contenido principal-->
		<footer>
				<ection id="footer_banner col-lg-12">
					<h2>aqui va el banner del footer.</h2>
				</section>
				<section id="footer_content">
					<article class="box_foo_1 foo_logo col-lg-4">
						<?php if ( function_exists( 'the_custom_logo' ) ): 
				          	the_custom_logo(); 
				          	if( has_nav_menu('redes_sociales') ):
				          	wp_nav_menu( array(
				                  'theme_location'    => 'redes_sociales', 
				                  'container'         => 'div',
				                  'container_class'   => 'menu_social_links col-4 col-xs-4 col-lg-4',
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
						<h1><a href="<?php echo get_option('home'); ?>">
							<?php bloginfo('name'); ?>
							</a>
						</h1>
						<?php endif; ?> 
					</article>
					<article class="box_foo_2 col-lg-4">
						<?php if(is_active_sidebar('footer_widgets_one') ):
							dynamic_sidebar('footer_widgets_one');
						else: ?>
							<h2>Footer 2</h2>
						<?php endif; ?>
					</article>
					<article class="box_foo_3 col-lg-4">
						<?php if(is_active_sidebar('footer_widgets_one') ):
							dynamic_sidebar('footer_widgets_one');
						else: ?>
							<h2>Footer 3</h2>
						<?php endif; ?>
					</article>
				</section>
				

		</footer>
	</div> <!-- end container -->
	<section class="block_publi_right col-xs-2 col-lg-2 text-center"><!--Inicio banner publi right-->
		<h3>BANNERS RIGHT</h3>
	</section> <!-- end container_publi_right-->
<?php wp_footer(); ?>
</body>
</html>

