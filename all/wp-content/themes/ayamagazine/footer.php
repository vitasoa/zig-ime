<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "body-content-wrapper" div and all content after.
 *
 */
?>
			<a href="#" class="scrollup"></a>

			<footer id="footer-main">

				<div id="footer-content-wrapper">

					<?php get_sidebar( 'footer' ); ?>

					<div class="clear">
					</div>

					<div id="copyright">

						<p>
							<?php ayamagazine_show_copyright_text(); ?>
						 	<a href="<?php echo esc_url( 'https://ayatemplates.com/product/ayamagazine' ); ?>"
						 		title="<?php esc_attr_e( 'ayamagazine Theme', 'ayamagazine' ); ?>">
								<?php esc_html_e('ayamagazine Theme', 'ayamagazine'); ?>
							</a> 
							<?php
								/* translators: %s: WordPress name */
								printf( __( 'Powered by %s', 'ayamagazine' ), 'WordPress' ); ?>
						</p>
						
					</div><!-- #copyright -->

				</div><!-- #footer-content-wrapper -->

			</footer><!-- #footer-main -->

		</div><!-- #body-content-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>