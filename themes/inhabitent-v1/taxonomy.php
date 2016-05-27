<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <h1><?php single_term_title(); ?></h1>
      <p><?php echo term_description(); ?></p>
			<?php while ( have_posts() ) : the_post(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
    			<?php the_post_thumbnail( 'large' ); ?>
    		<?php endif; ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        	<header class="entry-header">
        		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
        	</header><!-- .entry-header -->

        	<div class="entry-content">
        		<?php the_content(); ?>
        		<?php
        			wp_link_pages( array(
        				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
        				'after'  => '</div>',
        			) );
        		?>
        	</div><!-- .entry-content -->
        </article><!-- #post-## -->

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
