<?php
/**
 * Template part for displaying footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage templates
 */

?>

<small class="footer__copy">
  &copy; <?= date( 'Y' ); ?> <?php bloginfo( 'name' ) . esc_html_e( ' using ', 'really-simple' ); ?>
</small>

<span class="footer__theme">
  <a href="<?php echo esc_url( 'https://wordpress.org/themes/really-simple/', 'really-simple' ); ?>" 
     target="_blank" 
     rel="noreferrer noopener">
    <?php esc_html_e( 'Really Simple Theme', 'really-simple' ); ?>
  </a>
</span>
