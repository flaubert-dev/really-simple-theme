<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Really Simple
 */

get_header(); ?>
   
			<?php  
				// Start the Loop
				while ( have_posts() ) : the_post();

				// Content
				get_template_part( 'template-parts/content', 'single' );

				// Pagination
				the_post_navigation([
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'really-simple' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'really-simple' ) . '</span> <span class="nav-title">%title</span>',
				]);

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->

		<aside class="widget-area">
      <?php get_sidebar(); ?>
    </aside><!-- .widget-area -->

	</div><!-- #primary -->

<?php
get_footer();
