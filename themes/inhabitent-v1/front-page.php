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
			<?php $terms = get_terms('product-type'); ?>
			<?php if ( !empty($terms) && !is_wp_error($terms) ) : ?>
			<section class="shop-container">
				<h1>Shop Stuff</h1>
				<div class="shop-cta">
					<?php foreach ($terms as $term) : ?>
						<div>
							<img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug ?>.svg">
							<p><?php echo $term->description ?></p>
							<a href="<?php echo get_term_link($term, 'product-type') ?>"><?php echo $term->name?> Stuff</a>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<!--end shop-cta-->
			</section>
			<!--end section shop-container-->
			<?php endif; ?>
			<section>
				<h1>Inhabitent Journal</h1>
				<div class="entries-container">
					<?php
					   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
					   $journal_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
					    <!-- //Content from your array of posts go here. -->
							<div class="entry-box">
									<?php the_post_thumbnail(); ?>
								<div class="entry-info"
									<p><?php the_date('j F Y') ?> / <?php echo comments_number(); ?></p>
									<h4><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h4>
									<a class="secondary-button" href="<?php echo get_permalink(); ?>">Read Entry</a>
								</div>
								<!--end entry-info-->
							</div>
							<!--end entry-box-->
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
				<!--end entries-container-->
			</section>
			<!--end featured-entries-->
			<section class="featured-adventures">
				<h1>Latest Adventures</h1>
				<div class="adventures-container">
				</div>
				<!--end adventures-container-->
				<a href="#">More Adventures</a>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
