<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Shoreditch
 */

get_header(); ?>

	<?php
	while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'hero' );

	endwhile; // End of the loop.
	?>

	<div class="site-content-wrapper alianza-site-content-wrapper-modifier">
    <div>
      <h1 class="alianza-post-id alianza-font-SourceSansPro-semi-bold no-margin-text">/<?php echo $post->ID ?>
      </h1>
    </div>
    <div class="alianza-date-single-post-container">
      <footer class="entry-footer alianza-entry-footer-modifier alianza-entry-footer-single alianza-font-SourceSansPro-regular-italic">
        <?php shoreditch_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
		<div id="primary" class="content-area">
      <div class="entry-hero-wrapper alianza-entry-hero-wrapper">
        <?php
          shoreditch_entry_meta();

          the_title( '<h1 class="entry-title alianza-font-SourceSansPro-semi-bold">', '</h1>' );
        ?>
      </div><!-- .entry-hero-wrapper -->
			<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', get_post_format() );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

				the_post_navigation( array(
					'next_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Siguiente', 'shoreditch' ) . '</span> ' . '<span class="screen-reader-text">' . esc_html__( 'Siguiente publicación:', 'shoreditch' ) . '</span> ' . '<span class="post-title">%title</span>',
					'prev_text' => '<span class="meta-nav" aria-hidden="true">' . esc_html__( 'Anterior', 'shoreditch' ) . '</span> ' . '<span class="screen-reader-text">' . esc_html__( 'Publicación anterior:', 'shoreditch' ) . '</span> ' . '<span class="post-title">%title</span>',
				) );

			endwhile; // End of the loop.
			?>

			</main><!-- #main -->
		</div><!-- #primary -->

		<?php get_sidebar(); ?>

	</div><!-- .site-content-wrapper -->

<?php
get_sidebar( 'footer' );
get_footer();
