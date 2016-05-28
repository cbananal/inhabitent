<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<div class="single-product-container">
			<?php while ( have_posts() ) : the_post(); ?>

      	<div class="single-product-photo">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>
				</div>

      	<div class="single-product-info">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
					<p class="single-product-price"><?php echo CFS()->get( 'price' ); ?></p>
      		<?php the_content(); ?>
					<a class="secondary-button" href="#"><span class="fa fa-facebook"></span> Like</span></a>
					<a class="secondary-button" href="#"><span class="fa fa-twitter"></span> Tweet</span></a>
					<a class="secondary-button" href="#"><span class="fa fa-pinterest"></span> Pin</span></a>
      	</div>

			<?php endwhile; // End of the loop. ?>
		</div>
		<!--end single-product container-->

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
