<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package gh-exam
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php
		if (has_post_thumbnail()):
			the_post_thumbnail();
		endif;
		if ( is_single()===false ) :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;?>

	<div class="entry-content">
		<?php
			the_excerpt( );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gh-exam' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php gh_exam_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php
		endif; ?>
	<footer class="entry-footer">
		<?php gh_exam_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
