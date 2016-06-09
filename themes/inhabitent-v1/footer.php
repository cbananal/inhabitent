<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-container">
					<div class="contact">
						<h4>Contact Info</h4>
						<p><span class="footer-icon fa fa-envelope fa-lg"></span><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
						<p><span class="footer-icon fa fa-phone fa-lg"></span>778-456-7891</p>
						<a class="footer-icon" href="#"><i class="fa fa-facebook-square fa-lg" aria-hidden="true"></i></a>
						<a class="footer-icon" href="#"><i class="fa fa-twitter-square fa-lg" aria-hidden="true"></i></a>
						<a class="footer-icon" href="#"><i class="fa fa-google-plus-square fa-lg" aria-hidden="true"></i></a>
					</div>
					<!--end contact-->
					<div class="schedule">
						<h4>Business Hours</h4>
						<p><span class="day">Monday-Friday: </span> 9am to 5pm</p>
						<p><span class="day">Saturday:</span> 10am to 2pm</p>
						<p><span class="day">Sunday:</span> Closed</p>
					</div>
					<!--end schedule-->
					<img src="<?php bloginfo('template_url')?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo">
				</div>
				<!--end footer-container-->
				<div class="site-info">
					<p>Copyright &copy; <?php echo date('Y'); ?> <?php bloginfo ('name')?></p>
					<!-- <a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a> -->
				</div>
				<!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
