<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Really Simple
 * @subpackage templates
 */

?>

<section>
  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php
      $thumbnail_id = get_post_thumbnail_id();
      $size_small   = 'really-simple-size-small';
      $img_small    = wp_get_attachment_image_src( $thumbnail_id, $size_small );
    ?>

    <article <?php post_class( [ 'card-post' ] ); ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>

      <?php if ( has_post_thumbnail() ): ?>
        <header>
          <picture>
            <img src="<?= esc_url( $img_small[0] ); ?>"
                 width="<?= esc_url( $img_small[1] ); ?>" 
                 height="<?= esc_url( $img_small[2] ); ?>" 
                 alt="<?= get_the_title(); ?>">
          </picture>
        </header>
      <?php endif; ?>

      <section>
        <time><?= esc_html( get_the_date() ); ?></time>

        <h2><?php the_title(); ?></h2>
        
        <?php 
          if ( has_category() ) { 
            the_category(); 
          }
        ?>

        <?php
          if ( has_excerpt() ) {
            the_excerpt();
          } elseif ( strpos( $post->post_content, '<!--more-->' ) ) {
            the_content( 'Read more' );
          } else {
            the_excerpt();
          }
        ?>
      </section>

      <footer>
        <?php the_author_posts_link(); ?>
      </footer>
    </article>
  <?php endwhile; else: get_template_part( 'template-parts/content', 'none' ); endif; ?>
</section>
