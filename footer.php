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

  <footer class="footer">
    <div class="container">
      <small class="footer__copy">
        &copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>
      </small>

      <section class="footer__info">
        &nbsp;<span>/</span>

        <span class="footer__info-text">
          <?php esc_html_e( 'Theme:', 'really-simple' ); ?>
        </span>
        
        <a class="footer__info-link" href="<?php echo esc_url( 'https://wordpress.org/themes/really-simple/', 'really-simple' ); ?>" target="_blank" rel="noreferrer noopener"><?php esc_html_e( 'Really Simple', 'really-simple' ); ?></a>&nbsp;<span>/</span>

        <span class="footer__info-text">
          <?php esc_html_e( 'License:', 'really-simple' ); ?>
        </span>

        <a class="footer__info-link" href="<?php echo esc_url( 'https://www.gnu.org/licenses/gpl-3.0.html', 'really-simple' ); ?>" target="_blank" rel="noreferrer noopener">
          <?php esc_html_e( 'GPLv3', 'really-simple' ); ?>
        </a>
      </section>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>