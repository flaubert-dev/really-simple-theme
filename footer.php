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

  <footer class="site-footer">
  
    <div class="site-info">
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'really-simple' ) ); ?>">
        <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'really-simple' ), 'WordPress' );
        ?>
      </a>
      <span class="sep"> | </span>
      <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s', 'really-simple' ), 'Really Simple', '<a href="https://profiles.wordpress.org/flauberthenriques/">Flaubert Henriques</a>' );
      ?>
    </div><!-- .site-info -->

  </footer><!-- .site-footer -->

  <?php wp_footer(); ?>

</body>

</html>