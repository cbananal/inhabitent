<?php
/**
 * The template for displaying all pages.
 *	Template Name: About
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<div class="about-text">
					<h1>Our Story</h1>
	        <p><?php echo CFS()->get( 'our_story' ); ?></p>
					<h1>Our Team</h1>
					<p><?php echo CFS()->get( 'our_team' ); ?></p>
				</div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
