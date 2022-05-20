<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

get_header(); ?>

      <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() && is_home() && !is_paged() ) : ?>
        <h1 style="display:none;">
          <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
        </h1>
      <?php endif; ?><!-- title for blog and home pages -->

      <?php
      if ( have_posts() ) :
      
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
