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

<div class="header__flex">
  <?php if( function_exists( 'the_custom_logo' ) && has_custom_logo() ) : ?>
    <?php the_custom_logo(); ?>
  
  <?php else : ?>
    <h1 class="header__title">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1>
  <?php endif; ?>

  <nav class="header__flex-item">
    <a href="#" role="button">
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

  <a href="#header-menu" class="header__flex-item" role="button">
    <?php esc_html_e( 'Open Menu', 'really-simple' ); ?>
  </a>
</div>
