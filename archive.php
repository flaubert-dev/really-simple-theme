<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

get_header(); 

the_archive_title( '<h1 class="page-title">', '</h1>' );

the_archive_description( '<p class="archive-description">', '</p>' );

get_template_part( 'template-parts/content' );

get_footer();
