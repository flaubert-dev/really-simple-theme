<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

get_header(); ?><!-- header -->

<!-- title -->
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

<!-- description -->
<?php the_archive_description( '<p class="archive-description">', '</p>' ); ?>

<!-- content -->
<?php get_template_part( 'template-parts/content' ); ?>

<!-- footer -->
<?php
  get_footer();
