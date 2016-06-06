<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="product-heading">
	      <h1><?php single_term_title(); ?></h1>
	      <p><?php echo term_description(); ?></p>
			</div>
			<div class="product-list">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="product-info-box">
	        <?php if ( has_post_thumbnail() ) : ?>
	    				<div class="product-photo">
								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail('large') ?></a>
							</div>
	    		<?php endif; ?>
	        	<div class="product-info">
							<span class="product-title"><?php the_title(); ?></span>
							<span class="product-price"><?php echo CFS()->get( 'price' ); ?></span>
						</div>
				</div>
				<!--end product-info-box-->
			<?php endwhile; // End of the loop. ?>
			</div>
			<!--end product-list-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
