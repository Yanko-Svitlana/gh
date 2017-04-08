<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gh-exam
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php if (is_single()):?>
				<header>
					<h1 class="page-title"><?php echo esc_html__('Best Phons Of all Time in the World','gh-exam'); ?></h1>
				</header>
			<?php endif; ?>
			<div class="container">
				<div class="wrapper">
					<?php
					while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/content', 'single' );?>
					<!--<span class="prex-next">
						<?php /*previous_post_link('&laquo; &laquo; %',
							'Toward The Past: ', 'yes');*/?>
					</span>
					<span class="prex-next">
						<?php /*next_post_link('Next','','yes');;*/?>
					</span>-->

<?php


						/*// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;*/

					endwhile; // End of the loop.?>
				</div>
				<?php get_sidebar();?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php

get_footer();
