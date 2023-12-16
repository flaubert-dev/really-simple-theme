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

<footer class="footer" class="container footer">
  <div class="footer__flex">
    <small class="footer__flex-item">
      &copy; 
      
      <?php echo date( 'Y' ); ?> 
      
      <?php bloginfo( 'name' ); ?>
    </small>

    <span class="footer__flex-item">
      &minus; 
      
      <a 
      href="<?php echo esc_url( 'https://wordpress.org/themes/really-simple/', 'really-simple' ); ?>" target="_blank" 
      rel="noreferrer noopener"><?php esc_html_e( 'Really Simple', 'really-simple' ); ?></a> 
      
      <span>/</span>

      <a 
      href="<?php echo esc_url( 'https://www.gnu.org/licenses/gpl-3.0.html', 'really-simple' ); ?>" target="_blank" 
      rel="noreferrer noopener">
        <?php esc_html_e( 'GPLv3', 'really-simple' ); ?>
      </a>
    </span>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>