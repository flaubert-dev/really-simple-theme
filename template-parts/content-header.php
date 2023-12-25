<?php
/**
 * Template part for displaying header content in header.php
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

<?php if( has_nav_menu( 'really-simple-primary-menu' ) ) : ?>
  <nav id="header-menu" class="header__nav">
    <a href="#" class="btn btn--navClose" role="button">
      <?php esc_html_e( 'Close Menu', 'really-simple' ); ?> 
      
      <svg 
      xmlns="http://www.w3.org/2000/svg" 
      fill="none" 
      viewBox="0 0 24 24" 
      stroke-width="1.5" 
      stroke="currentColor">
        <path 
        stroke-linecap="round" 
        stroke-linejoin="round" 
        d="M9.75 9.75l4.5 4.5m0-4.5l-4.5 4.5M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
    </a>

    <?php
      wp_nav_menu([
        'theme_location'  => 'really-simple-primary-menu', 
        'container'       => '',
        'menu_class'      => 'really-first-menu',
        'fallback_cb'     => false
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
<?php endif; ?>
