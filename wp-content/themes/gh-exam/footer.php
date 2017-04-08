<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gh-exam
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="">
				<h2 class="footer-title"><?php the_custom_logo('custom-logo')?></h2>
				<span class="copyright">
						&copy;
					<?php echo get_theme_mod('copyrights-year');?>
					<?php echo get_theme_mod('copyrights')?>
				</span>
			</div>

			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-5">
				<?php dynamic_sidebar('footer-form');?>
			</div>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

