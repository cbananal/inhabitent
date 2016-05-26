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

					<!--JS Version -->
					<?php
						// $terms = get_terms('product-type');
						// if ( !empty($terms) && !is_wp_error($terms) ) {
						// 		foreach ($terms as $term) {
						// 			echo '<div><img src="' . get_template_directory_uri() . '/images/product-type-icons/' . $term->slug . '.svg"/><p>' . $term->description . '</p>' .
						// 			'<a href="#">' .	$term->name . ' stuff' . '</a></div>';
						// 		} //end foreach
						// }
					?>

					<!--STATIC HTML BELOW-->
					<!-- <div class="do">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/do.svg">
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<a href="#">Do Stuff</a>
					</div> -->
					<!--end do-->
					<!-- <div class="eat">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/eat.svg">
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<a href="#">Eat Stuff</a>
					</div> -->
					<!--end eat-->
					<!-- <div class="sleep">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/sleep.svg">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<a href="#">Sleep Stuff</a>
					</div> -->
					<!--end sleep-->
					<!-- <div class="wear">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/wear.svg">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<a href="#">Wear Stuff</a>
					</div> -->
					<!--end wear-->

			<section class="featured-entries">
				<h1>Inhabitent Journal</h1>
				<div class="entries-container">
					<?php
					   $args = array( 'post_type' => 'post', 'posts_per_page' => 3 );
					   $journal_posts = get_posts( $args ); // returns an array of posts
					?>
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
					    <!-- //Content from your array of posts go here. -->
							<div class="entry-box">
								<div class="entry-thumbnail">
									<?php echo the_post_thumbnail() ?>
								</div>
								<!--end entry-thumbnail-->
								<div class="entry-info"
									<p><?php echo the_date('j F Y') ?> / <?php echo comments_number() ?></p>
									<h4><a href="#"><?php echo the_title() ?></a></h4>
									<a href="#">Read Entry</a>
								</div>
								<!--end entry-info-->
							</div>
							<!--end entry-box-->
					<?php endforeach; wp_reset_postdata(); ?>

					<!-- <div class="entry-one">
						<img src="">
						<p>16 April 2016 / 3 comments</p>
						<h4> <a class="title" href="#">Van Camping Photo Contest</a></h4>
						<a href="#">Read Entry</a>
					</div>
					<div class="entry-two">
						<img src="">
						<p>2 April 2016 / 0 Comments</p>
						<h4><a class="title" href="#">Fireside Libations: 3 Warm Cocktail Recipes</a></h4>
						<a href="#">Read Entry</a>
					</div>
					<div class="entry-three">
						<img src="">
						<p>31 March 2016 / 0 Comments</p>
						<h4><a class="title" href="#">How To: Eating Healthy Meals in the Wild</a></h4>
						<a href="#">Read Entry</a>
					</div> -->
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
