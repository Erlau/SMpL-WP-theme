<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SMpL
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="widget-bottom1">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('bottom1')) : else : ?>

			<div class="pre-widget">
			<p><strong>Widget område</strong></p>
			<p>Området her er klar til widgets via WP Admin</p>
			</div>

			<?php endif; ?>
		</div>
		<div id="widget-bottom2">
			<?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('bottom2')) : else : ?>

			<div class="pre-widget">
			<p><strong>Widget område</strong></p>
			<p>Området her er klar til widgets via WP Admin</p>
			</div>

			<?php endif; ?>
		</div>
<!--		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'smpl' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'smpl' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'smpl' ), 'SMpL', '<a href="http://wle.dk" rel="designer">Erik Weber-Lauridsen</a>' ); ?>
		</div> .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
