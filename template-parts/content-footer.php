<?php
/**
 * Template part for displaying footer content in footer.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<small class="footer__copy">
  &copy; 
  
  <?php echo date( 'Y' ); ?> 
  
  <?php bloginfo( 'name' ); ?>
</small>

<span class="footer__theme">
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
