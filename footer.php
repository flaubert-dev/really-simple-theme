<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Really Simple
 */

?>

      <?php 
        if( !is_page() && !is_search() && !is_404() && !is_date() && is_active_sidebar( 'really-simple-sidebar-1' ) ) : ?>
        <aside class="aside"><!-- sidebar -->
          <?php 
            if( is_active_sidebar( 'really-simple-sidebar-1' ) ) {
              dynamic_sidebar( 'really-simple-sidebar-1' );
            }
          ?>
        </aside>
      <?php endif; ?>
    </div><!-- container -->
  </main><!-- main -->
  
  <div class="container">
    <?php // Pagination
      if( the_posts_navigation() ) : 
        the_posts_navigation();
      endif;
    ?>
  </div>

  <footer class="footer">
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'footer' ); ?>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>