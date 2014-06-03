<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>
			</div><!-- /.row -->
		</div><!-- /.container -->		  
	</div><!-- /#content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
		  <div class="row">
				<?php
							wp_nav_menu( array(
									'menu'              => 'secondary',
									'theme_location'    => 'secondary',
									'depth'             => 1,
									'container'         => 'div',
									'container_class'   => 'col-xs-12 col-sm-4',
									'container_id'      => 'div-footer-navigation',
									'menu_class'        => '',
									'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
									'walker'            => new wp_bootstrap_navwalker())
							);
				?>			
					
			  <div class="col-xs-12 col-sm-4">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', '_s' ) ); ?>"><?php printf( __( 'Proudly powered by %s', '_s' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s by %2$s.', '_s' ), '_s', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
				</div>
				
			</div>
			
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
