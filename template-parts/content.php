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

<article id="post-<?php the_ID(); ?>" <?php post_class( [ 'post-card' ] ); ?>>
  
  <?php if ( has_post_thumbnail() ): ?>
    <a class="card-media" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" aria-hidden="true" tabindex="-1">
      <?php the_post_thumbnail( 'really-simple-thumb', [ 'class' => 'really-thumb' ] ); ?>
    </a>
  <?php endif; ?><!-- .card-media --> 

  <div class="card-body">
    
    <?php echo '<time>' . esc_html( get_the_date() ) . '</time>'; ?><!-- date/time -->

    <header class="entry-header">
      <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
    </header><!-- .entry-header --> 

    <div class="entry-meta">
      <?php 
        if ( has_category() ) {
          the_category( ', ' );
        }
      ?>
    </div><!-- .entry-meta -->

    <div class="entry-content">
      <?php
        if( has_excerpt() ) {
          the_excerpt();
        } elseif ( strpos( $post->post_content, '<!--more-->' ) ) {
          the_content( 'Read more' );
        } else {
          the_excerpt();
        }
      ?>
    </div><!-- .entry-content --> 

    <?php the_author_posts_link(); ?><!-- author -->

  </div><!-- .card-body --> 

</article><!-- #post-<?php the_ID(); ?> -->
