<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RAV_Theme
 */

?>
		</div><!-- .wrapper -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<?php get_sidebar( 'footer' ); ?>
			<div class="site-info">
				<div class="container">
					<p>&copy; <?php bloginfo('name'); ?> <?php the_time('Y') ?></p>
				</div><!-- .container -->
			</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
