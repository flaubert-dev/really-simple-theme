<?php
/**
 * Template part for displaying archive content in index.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<!-- title -->
<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>

<!-- description -->
<?php the_archive_description( '<p class="archive-description">', '</p>' ); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'template-parts/content' ); ?>
  
  <?php endwhile; ?>
  
  <?php the_posts_navigation(); ?>
<?php else : ?>
  <?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
