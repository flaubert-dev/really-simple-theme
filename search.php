<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Really Simple
 */

get_header(); 
    
printf( esc_html__( 'Search Results for: %s', 'really-simple' ), '<span>' . get_search_query() . '</span>' ); // translators: %s: search query

get_template_part( 'template-parts/content' );

get_footer();
