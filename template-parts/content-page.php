<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 * @subpackage template-parts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php if ( has_post_thumbnail() ): ?>
      <div class="entry-media" aria-hidden="true" tabindex="-1">
        <?php the_post_thumbnail( 'full', [ 'class' => 'really-page-thumb' ] ); ?>
      </div>
    <?php endif; ?><!-- .entry-media -->
  </header><!-- .entry-header -->

  <div class="entry-body">

    <div class="entry-content">
      <?php
      the_content();

      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'really-simple' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
      <footer class="entry-footer">
        <?php
        edit_post_link(
          sprintf(
            wp_kses(
              /* translators: %s: Name of current post. Only visible to screen readers */
              __( 'Edit <span class="screen-reader-text">%s</span>', 'really-simple' ),
              array(
                'span' => array(
                  'class' => array(),
                ),
              )
            ),
            wp_kses_post( get_the_title() )
          ),
          '<span class="edit-link">',
          '</span>'
        );
        ?>
      </footer><!-- .entry-footer -->
	  <?php endif; ?><!-- .entry-footer -->

  </div><!-- .entry-body -->

</article><!-- #post-<?php the_ID(); ?> -->
