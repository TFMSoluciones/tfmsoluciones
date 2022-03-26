<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package twentytwentytwo
 */
?>
			</div>
		</div>
	</div><!-- #content -->

	<?php do_action('twentytwentytwo_before_footer'); ?>

	<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
		<?php get_sidebar('footer'); ?>
	<?php endif; ?>

    <a class="go-top"><i class="fa fa-angle-up"></i></a>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://tfmsoluciones.com/', 'twentytwentytwo' ) ); ?>"><?php printf( __( 'Creado en Colombia con <span style="color: #e25555;">&#9829;</span> por %s', 'TFM Soluciones' ), 'TFM Soluciones' ); ?></a>
			<!--span class="sep"> | </span-->
			<!--?php printf( __( 'Theme: %2$s by %1$s.', 'twentytwentytwo' ), 'aThemes', '<a href="https://athemes.com/theme/twentytwentytwo" rel="designer">twentytwentytwo</a>' ); ?-->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

	<?php do_action('twentytwentytwo_after_footer'); ?>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>