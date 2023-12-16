<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Really Simple
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <header class="header">
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'header' ); ?>
    </div>
  </header>

  <main class="main">
    <div class="container">
      <?php if( is_home() ) : ?>
        <?php if( get_bloginfo( 'description' ) ) : ?>
          <h1>
            <?php echo esc_html( get_bloginfo( 'description' ) ); ?>
          </h1>
        <?php endif; ?>
      <?php endif; ?>

      <?php
        if( is_home() ) { // home
          get_template_part( 'template-parts/content' );
        } else if( is_page() ) { // page
          get_template_part( 'template-parts/content', 'page' );
        } else if( is_single() ) { // single
          get_template_part( 'template-parts/content', 'single' );
        } else if( is_archive() ) { // archive
          get_template_part( 'template-parts/content', 'archive' );
        } else if( is_search() ) { // search
          get_template_part( 'template-parts/content', 'search' );
        } else if( is_404() ) { // 404
          get_template_part( 'template-parts/content', 'error' );
        }
      ?>

      <!-- Sidebar -->
      <aside class="aside">
        <?php get_template_part( 'template-parts/content', 'aside' ); ?>
      </aside>
    </div>
  </main>

  <footer class="footer">
    <div class="container">
      <?php get_template_part( 'template-parts/content', 'footer' ); ?>
    </div>
  </footer>

  <?php wp_footer(); ?>
</body>
</html>