<?php
/**
 * Template part for displaying search content in search.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<h1>
  <?php 
    /* translators: %s: search query. */
    printf( esc_html__( 'Search Results for: %s', 'really-simple' ), '<span>' . get_search_query() . '</span>' );
  ?>
</h1>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'template-parts/content' ); ?>
    <?php endwhile; ?>

    <?php the_posts_navigation(); ?>
  <?php else: ?>
    <?php echo '<p>' . esc_html__( 'No results were found, try searching for another word.', 'really-simple' ) . '</p>'; ?>

    <?php 
      get_search_form();

      the_widget( 'WP_Widget_Recent_Posts', [
        'title'   => esc_html__( 'Latest Posts', 'really-simple' ), 
        'number'  => 10
      ]); 
    ?>
<?php endif; ?>
