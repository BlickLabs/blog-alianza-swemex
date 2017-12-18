<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Shoreditch
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class();?> style="padding-top: 0 !important;">
	<div class="hentry-wrapper alianza-hentry-wrapper-modifier">
	<?php
	if ( is_single() && has_post_thumbnail()) {
	} else if (is_single() && !has_post_thumbnail()) { ?>
		<header class="entry-header">
			<div class="entry-header-wrapper">
	<?php
		the_title( '<h1 class="entry-title">', '</h1>' );
	 ?>
			</div><!-- .entry-header-wrapper -->
		</header><!-- .entry-header -->
	<?php
	} else if (!is_single() && has_post_thumbnail()) { ?>
		<header class="entry-header alianza-entry-header-modifier" <?php shoreditch_background_image(); ?>>
		</header><!-- .entry-header -->
    <div class="alianza-entry-header-content-container">
      <div>
        <h1 class="alianza-post-id alianza-font-SourceSansPro-semi-bold no-margin-text">/<?php echo $wp_query->current_post + 1 ?></h1>
      </div>
		  <div class="entry-header-wrapper alianza-entry-header-wrapper-modifier">
<?php
	the_title( '<h2 class="entry-title entry-title-content-mofifier"><a class="alianza-entry-title-posts alianza-font-SourceSansPro-semi-bold" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
 ?>
      <footer class="entry-footer alianza-entry-footer-modifier alianza-font-SourceSansPro-regular-italic">
        <?php shoreditch_entry_footer(); ?>
      </footer><!-- .entry-footer -->
		</div><!-- .entry-header-wrapper -->
	<?php
	} else { ?>
		<header class="entry-header">
			<div class="entry-header-wrapper">
	<?php
		the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	 ?>
			</div><!-- .entry-header-wrapper -->
		</header><!-- .entry-header -->
	<?php
	}
	?>


  		<div class="entry-content alianza-entry-content-modifier">
  			<?php
  			if ( is_single() ) {
  				the_content( sprintf(
  				/* translators: %s: Name of current post. */
  					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shoreditch' ), array( 'span' => array( 'class' => array() ) ) ),
  					the_title( '<span class="screen-reader-text">"', '"</span>', false )
  				) );
  			} else {
  				the_excerpt( sprintf(
  				/* translators: %s: Name of current post. */
  					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'shoreditch' ), array( 'span' => array( 'class' => array() ) ) ),
  					the_title( '<span class="screen-reader-text">"', '"</span>', false )
  				) );
  			}
  			wp_link_pages( array(
  				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_html__( 'Pages:', 'shoreditch' ) . '</span>',
  				'after'       => '</div>',
  				'link_before' => '<span>',
  				'link_after'  => '</span>',
  				'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'shoreditch' ) . ' </span>%',
  				'separator'   => '<span class="screen-reader-text">, </span>',
  			) );
  			?>
  		</div><!-- .entry-content -->

  		
    </div>
		<?php
		if ( is_single() ) {
			get_template_part( 'template-parts/content', 'author' );
		}
		?>
	</div><!-- .hentry-wrapper -->
</article><!-- #post-## -->
