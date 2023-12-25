<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

get_header(); ?><!-- header -->

<?php if( is_home() && !is_paged() ) : ?>
  <?php if( get_bloginfo( 'description' ) ) : ?>
    <h1>
      <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
    </h1>
  <?php endif; ?>
<?php endif; ?>

<!-- content -->
<?php get_template_part( 'template-parts/content' ); ?>

<!-- footer -->
<?php
  get_footer();
