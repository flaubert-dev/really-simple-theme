<?php
/**
 * The template header
 * 
 * This is the template that displays all of the <head> and <body>
 * 
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * 
 * @package Really Simple
 * 
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <?php get_template_part( 'template-parts/content', 'header' ); ?>
  </header>

  <main id="main" class="main"><!-- main -->
    <?php 
      if ( is_home() && !is_paged() ) : 
        if ( get_bloginfo( 'description' ) ) :
          echo '<h1 class="title-seo">' . esc_html( get_bloginfo( 'description' ) ) . '</h1>';
        endif;
      endif;
    ?>
    
    <div class="container"><!-- container -->
