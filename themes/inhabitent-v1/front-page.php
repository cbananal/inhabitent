<?php
/**
 * The template for displaying the frontpage.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="hero-container">
				<img src="<?php bloginfo('template_url')?>/images/logos/inhabitent-logo-full.svg" alt ="Inhabitent Logo">
			</section>
			<!--end hero-container-->
			<section class="shop-cta">
			</section>
			<section class="featured-entries">
			</section>
			<section class="featured-adventures">
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
