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
  <?php 
    if ( is_home() && !is_paged() ) : 
      if ( get_bloginfo( 'description' ) ) :
        echo '<h1 class="title-seo">' . esc_html( get_bloginfo( 'description' ) ) . '</h1>';
      endif;
    endif;
  ?>

  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <article <?php post_class( [ 'card-post' ] ); ?>>
      <header>
        <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?>
      </header>

      <section>
        <?php if ( has_post_thumbnail() ): ?>
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail( 'really-simple-thumb', [ 'class' => 'card-thumb' ] ); ?>
          </a>
        <?php endif; ?>

        <div>
          <?php
            the_title( 
              '<h2 class="card-title">
                <a href="' . esc_url( get_permalink() ) . '">', '</a>
              </h2>'
            );

            if ( has_category() ) { 
              the_category( ', ' ); 
            }

            if ( has_excerpt() ) {
              the_excerpt();
            } elseif ( strpos( $post->post_content, '<!--more-->' ) ) {
              the_content( 'Read more' );
            } else {
              the_excerpt();
            }
          ?>
        </div>
      </section>
    </article>
  <?php endwhile; ?>

    <?php // Pagination
      if( the_posts_navigation() ) : 
        the_posts_navigation();
      endif;
    ?>

  <?php else: get_template_part( 'template-parts/content', 'none' ); endif; ?>
</section>
