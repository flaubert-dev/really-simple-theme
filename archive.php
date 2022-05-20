<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

get_header(); ?>

      <?php if ( have_posts() ) : ?>

        <header class="page-header">
          <?php
            the_archive_title( '<h1 class="page-title">', '</h1>' );
            the_archive_description( '<div class="archive-description">', '</div>' );
          ?>
        </header><!-- .page-header -->

        <?php
          // Start the Loop
          while ( have_posts() ) : the_post();
          
            // Content
            get_template_part( 'template-parts/content' );

          endwhile; 

          // Pagination
          the_posts_navigation();

      else:

        // No content
        get_template_part( 'template-parts/content', 'none' );

      endif;  
      ?>
    
    </main><!-- #main -->

    <aside class="widget-area">
      <?php get_sidebar(); ?>
    </aside><!-- .widget-area -->

  </div><!-- #primary -->

<?php
get_footer();
