<?php
/**
 * Template part for displaying page content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage templates
 */

if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<article <?php post_class( [ 'card-page' ] ); ?>>
  <header>
    <?php
      the_title( '<h1>', '</h1>' );

      if( has_post_thumbnail() ): 
        the_post_thumbnail( 'full', [ 'class' => 'card-thumb' ] );
      endif;
    ?>
  </header>

  <section>
    <?php
      the_content();

      wp_link_pages([
        'before' => '<div class="card-links">' . esc_html__( 'Pages:', 'really-simple' ),
        'after'  => '</div>',
      ]);
    ?>
  </section>    

  <?php if( get_edit_post_link() ) : ?>
    <footer>
      <?php
        edit_post_link(
          sprintf(
            wp_kses( /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-reader-text">%s</span>', 'really-simple' ),
              [
                'span' => [
                  'class' => [],
                ],
              ],
            ),
            wp_kses_post( get_the_title() )
          ),
          '<span class="edit-link">', '</span>'
        );
      ?>
    </footer>
  <?php endif; ?>
</article>

<?php // If comments are open or we have at least one comment, load up the comment template.

if( comments_open() || get_comments_number() ) : comments_template(); endif;
  endwhile; // End of the loop.
endif;
