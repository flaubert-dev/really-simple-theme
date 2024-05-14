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
      // ID da imagem destacada
      $thumbnail_id = get_post_thumbnail_id();

      // Tamanhos de imagem personalizados
      $size_small = 'really-simple-size-small';

      // URLs e tamanhos das imagens
      $img_small  = wp_get_attachment_image_src( $thumbnail_id, $size_small );

      var_dump($img_small);

      echo '<picture>';
      echo '<img src="' . esc_url( $img_small[0] ) . '" width="' . esc_attr( $img_small[1] ) . '" height="' . esc_attr( $img_small[2] ) . '" alt="' . get_the_title() . '">';
      echo '</picture>';
    ?>

    <article <?php post_class( [ 'card-post' ] ); ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
        <?php the_title(); ?>
      </a>

      <?php if ( has_post_thumbnail() ): ?>
        <header>
          <?php the_post_thumbnail( 'really-simple-type1' ); ?>
        </header>
      <?php endif; ?>

      <section>
        <?php
          echo '<time>' . esc_html( get_the_date() ) . '</time>';

          the_title( '<h2>', '</h2>' );

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
