<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Really Simple
 */

get_header(); ?>

      <header class="page-header">
        <h1><?php esc_html_e( 'Page not found.', 'really-simple' ); ?></h1>
      </header><!-- .page-header -->

      <div class="page-content">
        <p><?php esc_html_e( 'The page you tried to access does not exist.', 'really-simple' ); ?></p>
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
      </div><!-- .page-content -->

    </main><!-- #main -->

  </div><!-- #primary -->

<?php 
get_footer(); 
