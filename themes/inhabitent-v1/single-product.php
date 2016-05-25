<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
      	<header class="entry-header">
      		<?php if ( has_post_thumbnail() ) : ?>
      			<?php the_post_thumbnail( 'large' ); ?>
      		<?php endif; ?>

      		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

      		<div class="entry-meta">
      			<!-- <?php //red_starter_posted_on(); ?> / <?php //red_starter_comment_count(); ?> / <?php //red_starter_posted_by(); ?> -->
      		</div><!-- .entry-meta -->
      	</header><!-- .entry-header -->

      	<div class="entry-content">
          <!--PRICE GOES HERE-->
					<p><?php echo CFS()->get( 'price' ); ?></p>
      		<?php the_content(); ?>
      	</div><!-- .entry-content -->
      </article><!-- #post-## -->

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
