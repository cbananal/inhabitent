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
			<section class="shop-container">
				<h1>Shop Stuff</h1>
				<div class="shop-cta">
					<div class="do">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/do.svg">
						<p>Get back to nature with all the tools and toys you need to enjoy the great outdoors.</p>
						<a href="#">Do Stuff</a>
					</div>
					<!--end do-->
					<div class="eat">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/eat.svg">
						<p>Nothing beats food cooked over a fire. We have all you need for good camping eats.</p>
						<a href="#">Eat Stuff</a>
					</div>
					<!--end eat-->
					<div class="sleep">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/sleep.svg">
						<p>Get a good night's rest in the wild in a home away from home that travels well.</p>
						<a href="#">Sleep Stuff</a>
					</div>
					<!--end sleep-->
					<div class="wear">
						<img src="<?php bloginfo('template_url') ?>/images/product-type-icons/wear.svg">
						<p>From flannel shirts to toques, look the part while roughing it in the great outdoors.</p>
						<a href="#">Wear Stuff</a>
					</div>
					<!--end wear-->
				</div>
				<!--end shop-categories-->
			</section>
			<!--end shop-call-to-action-->
			<section class="featured-entries">
				<h1>Inhabitent Journal</h1>
				<div class="entries-container">
					<div class="entry-one">
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
					</div>
				</div>
				<!--end entries-container-->
			</section>
			<section class="featured-adventures">
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?//php get_sidebar(); ?>
<?php get_footer(); ?>
