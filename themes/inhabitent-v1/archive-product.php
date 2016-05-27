<?php
/**
 * The template for displaying all pages.
 * Template Name: Shop
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <?php $terms = get_terms('product-type'); ?>
      <?php if ( !empty($terms) && !is_wp_error($terms) ) : ?>
      <div class="product-page-container">
        <h1>Shop Stuff</h1>
        <div class="tax-links">
          <?php foreach ($terms as $term) : ?>
            <a href="<?php echo get_term_link($term, 'product-type') ?>"><?php echo $term->name?></a>
          <?php endforeach; wp_reset_postdata(); ?>
        </div>
				<!--end tax-links-->
      <?php endif; ?>
        <div class="product-list">
          <?php
             $args = array( 'post_type' => 'product',
                            'posts_per_page' => 16 );
             $product_post = get_posts( $args ); // returns an array of posts
          ?>
          <div class="product-items">
          <?php foreach ($product_post as $post) : setup_postdata ($post); ?>
            <a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail() ?></a>
            <p><?php the_title() ?></p>
            <p><?php echo CFS()->get( 'price' ); ?></p>
          <?php endforeach; wp_reset_postdata(); ?>
          </div>
          <!--end product-items-->
        </div>
        <!--end product list-->
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
