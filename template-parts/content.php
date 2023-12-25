<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
  <article <?php post_class( [ 'card-post' ] ); ?>>
    <header>
      <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?>
    </header>

    <section>
      <a href="<?php the_permalink(); ?>">
        <?php if( has_post_thumbnail() ): ?>
          <?php the_post_thumbnail( 'really-simple-thumb', [ 'class' => 'card-thumb' ] ); ?>
        <?php endif; ?>
      </a>

      <div>
        <?php the_title( 
          '<h2 class="card-title">
            <a href="' . esc_url( get_permalink() ) . '">', '</a>
          </h2>'); 
        ?>

        <?php if( has_category() ) { the_category( ', ' ); } ?>

        <?php
          if( has_excerpt() ) {
            the_excerpt();
          } elseif( strpos( $post->post_content, '<!--more-->' ) ) {
            the_content( 'Read more' );
          } else {
            the_excerpt();
          }
        ?>
      </div>
    </section>

    <footer>
      <?php the_author_posts_link(); ?>
    </footer>
  </article>
<?php endwhile; ?>
  <?php if( the_posts_navigation() ) : ?>
    <?php the_posts_navigation(); ?>
  <?php endif; ?>
<?php else: ?>
  <?php get_template_part( 'template-parts/content', 'none' ); ?>
<?php endif; ?>
