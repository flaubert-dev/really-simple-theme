<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Really Simple
 */

get_header(); ?><!-- header -->

<h1>
  <?php 
    /* translators: %s: search query. */
    printf( esc_html__( 'Search Results for: %s', 'really-simple' ), '<span>' . get_search_query() . '</span>' );
  ?>
</h1>

<!-- content -->
<?php get_template_part( 'template-parts/content' ); ?>

<!-- footer -->
<?php
  get_footer();
