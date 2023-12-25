<?php
 /**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<?php if( !is_search() ) : ?>
  <?php echo '<p>' . esc_html_e( 'There are no posts yet. Post something interesting.', 'really-simple' ) . '</p>'; ?>
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
