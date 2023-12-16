<?php
/**
 * Template part for displaying header content in index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
  <?php the_custom_logo(); ?>

<?php else : ?>
  <a class="header__title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
    <?php bloginfo( 'name' ); ?>
  </a>
<?php endif; ?>

<nav class="header__nav">
  <a href="#" class="btn btn--navClose" role="button">
    &times; <?php esc_html_e( 'Close Menu', 'really-simple' ); ?>
  </a>

  <?php
    wp_nav_menu([
      'theme_location'  => 'really-simple-primary-menu', 
      'container'       => '',
      'menu_class'      => 'really-first-menu'
    ]);
  ?>
</nav>

<a href="#header-menu" class="btn btn--navOpen" role="button">
  <?php esc_html_e( 'Open Menu', 'really-simple' ); ?>

  <svg 
  xmlns="http://www.w3.org/2000/svg" 
  fill="none" 
  viewBox="0 0 24 24" 
  stroke-width="1.5" 
  stroke="currentColor">
    <path 
    stroke-linecap="round" 
    stroke-linejoin="round" 
    d="M3.75 9h16.5m-16.5 6.75h16.5" />
  </svg>
</a>
