<?php
/**
 * The template header
 * 
 * This is the template that displays all of the <head> section and everything up until <main id="main" class="entry-site-main">
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
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'header' ); ?>
    </div>
  </header>

  <main class="main"><!-- main -->
    <div class="container"><!-- container -->
