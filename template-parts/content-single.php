<?php
/**
 * Template part for displaying single content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage templates
 */

while( have_posts() ) : the_post(); ?>

<article <?php post_class( [ 'card-single' ] ); ?>>
  <?php the_title( '<h1>', '</h1>' ); ?>

  <section>
    <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?>

    <span class="card-single__author">
      <?php esc_html_e( 'Author: ', 'really-simple' ); ?> <?php the_author_posts_link(); ?>
    </span>
  </section>

  <section>
    <?php 
      if( has_post_thumbnail() ): 
        the_post_thumbnail( 'full', [ 'class' => 'card-thumb' ] );
      endif;
    ?>

    <div class="card-single__content">
      <?php
        the_content();

        wp_link_pages([
          'before' => '<div class="card-links">' . esc_html__( 'Pages:', 'really-simple' ),
          'after'  => '</div>',
        ]);
      ?>
    </div>

    <div class="card-single__categories">
      <span>
        <?php esc_html_e( 'Categories:', 'really-simple' ); ?>
      </span>
      
      <?php the_category( ', ' ); ?>
    </div>
      
    <?php if( has_tag() ): ?>
      <div class="card-single__tags">
        <?php the_tags( 'Tags: ', ', ' ); ?>
      </div>
    <?php endif; ?>
  </section>
</article>

<?php // Pagination
  the_post_navigation([
    'prev_text' => '<span class="card-single__navSubtitle">' . esc_html__( 'Previous:', 'really-simple' ) . '</span> <span class="card-single__navTitle">%title</span>',
    'next_text' => '<span class="card-single__navSubtitle">' . esc_html__( 'Next:', 'really-simple' ) . '</span> <span class="card-single__navTitle">%title</span>',
  ]);

  // If comments are open or we have at least one comment, load up the comment template.
  if ( comments_open() || get_comments_number() ) :
    comments_template();
  endif;

endwhile; // End of the loop.
