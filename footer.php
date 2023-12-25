<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Really Simple
 */

?>

      <?php if( !is_page() && !is_404() && is_active_sidebar( 'really-simple-sidebar-1' ) ) : ?>
        <!-- sidebar -->
        <aside class="aside">
          <?php get_template_part( 'template-parts/content', 'aside' ); ?>
        </aside>
      <?php endif; ?>
    </div><!-- container -->
  </main><!-- main -->

  <footer class="footer">
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'footer' ); ?>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>