<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ThemeGrill
 * @subpackage Radiate
 * @since Radiate 1.0
 */
?>

		</div><!-- .inner-wrap -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			@Copyright KevinDing |
			<?php do_action( 'radiate_credits' ); ?>
			<?php _e( 'Powered by ', 'radiate' ); ?>
			<a href="http://wordpress.org/" rel="generator"><?php _e( 'WordPress', 'radiate' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( '%1$s by %2$s.', 'radiate' ), 'Radiate', '<a href="'.esc_url('http://themegrill.com/').'" rel="designer">ThemeGrill</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
   <a href="#masthead" id="scroll-up"><span class="genericon genericon-collapse"></span></a>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>