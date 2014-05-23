<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Coffee-Sugar
 */
?>
			</div><!-- /.row -->
		</div><!-- /.container -->		  
	</div><!-- /#content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
		  <div class="row">
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'coffee-sugar' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'coffee-sugar' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
				<?php printf( __( 'Theme: %1$s by %2$s.', 'coffee-sugar' ), 'Coffee-Sugar', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
			</div>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
