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

    <?php the_author_posts_link(); // author ?>

    <?php if ( is_sticky() ) : // sticky post ?>
      <div class="paperclip" style="display: none;">
        <svg xmlns="http://www.w3.org/2000/svg" 
             fill="none" 
             viewBox="0 0 24 24" 
             stroke-width="1.5" 
             stroke="currentColor"
             style="display: none;">
          <path stroke-linecap="round" stroke-linejoin="round" d="m18.375 12.739-7.693 7.693a4.5 4.5 0 0 1-6.364-6.364l10.94-10.94A3 3 0 1 1 19.5 7.372L8.552 18.32m.009-.01-.01.01m5.699-9.941-7.81 7.81a1.5 1.5 0 0 0 2.112 2.13" />
        </svg>
      </div><!-- paperclip (sticky post) -->
    <?php endif; ?>
  </div><!-- .card-body -->

</article>
