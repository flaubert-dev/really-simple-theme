<?php
/**
 * Template part for displaying 404 content in index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<h1>
  <?php esc_html_e( 'Page not found.', 'really-simple' ); ?>
</h1>

<div class="page-content">
  <p>
    <?php esc_html_e( 'The page you tried to access does not exist.', 'really-simple' ); ?>
  </p>

  <?php 
    get_search_form();
    the_widget( 'WP_Widget_Recent_Posts', [
      'title'   => esc_html__( 'Latest Posts', 'really-simple' ), 
      'number'  => 10
    ]);
  ?>

  <a class="error-home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
    &larr; <?php esc_html_e( 'Back to home', 'really-simple' ); ?>
  </a>
</div>
