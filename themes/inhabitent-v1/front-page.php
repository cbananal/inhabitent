<?php
/**
 * The template for displaying the frontpage.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero-container">
				<img src="<?php bloginfo('template_url')?>/images/logos/inhabitent-logo-full.svg" alt ="Inhabitent Logo">
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
