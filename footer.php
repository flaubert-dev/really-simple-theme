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
      <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'really-simple' ) ); ?>" target="_blank">
        <?php
          /* translators: %s: CMS name, i.e. WordPress. */
          printf( esc_html__( 'Proudly powered by %s', 'really-simple' ), 'WordPress' );
        ?>
      </a>

      <span class="sep"> | </span>

      <?php
        /* translators: 1: Theme name, 2: Theme author. */
        printf( esc_html__( 'Theme: %1$s by %2$s', 'really-simple' ), '<a href="https://wordpress.org/themes/really-simple/" target="_blank">Really Simple</a>', 'Flaubert Henriques' );
      ?>

      <span class="sep"> | </span>

      <a href="<?php echo esc_url( __( 'https://www.gnu.org/licenses/old-licenses/gpl-2.0.html', 'really-simple' ) ); ?>" target="_blank">
        <?php
          /* translators: %s: License. */
          printf( esc_html__( 'LICENSE', 'really-simple' ) );
        ?>
      </a>
    </div><!-- .site-info -->

  </footer><!-- .site-footer -->

  <footer class="footer">
    <small class="footer__copy">
      &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
    </small>

    <section class="footer__info">
      <span class="footer__info-text">
        <?php esc_html_e( 'Theme:', 'really-simple' ); ?>
      </span>
      
      <a class="footer__info-link" href="<?php echo esc_url( 'https://wordpress.org/themes/really-simple/', 'really-simple' ); ?>" target="_blank" rel="noreferrer noopener">
        <?php esc_html_e( 'Really Simple', 'really-simple' ); ?>
      </a>

      <span>/</span>

      <span class="footer__info-text">
        <?php esc_html_e( 'License:', 'really-simple' ); ?>
      </span>

      <a class="footer__info-link" href="<?php echo esc_url( 'https://www.gnu.org/licenses/gpl-3.0.html', 'really-simple' ); ?>" target="_blank" rel="noreferrer noopener">
        <?php esc_html_e( 'GPLv3', 'really-simple' ); ?>
      </a>
    </section>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>