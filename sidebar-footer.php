<?php
/**
 * The footer widget areas.
 *
 * @package RAV_Theme
 */
?>

<div id="footer-widget-area" class="footer-widgets">
	<div class="container">
		<div class="row">
			<div class="footer-widgets-1 col-md-4 col-lg-4">
				<?php dynamic_sidebar( 'footer-1' ); ?>
			</div>
			<div class="footer-widgets-2 col-md-4 col-lg-4">
				<?php dynamic_sidebar( 'footer-2' ); ?>
			</div>
			<div class="footer-widgets-3 col-md-4 col-lg-4">
				<?php dynamic_sidebar( 'footer-3' ); ?>
			</div>
		</div>
	</div>
</div><!-- footer-widget-area ends -->
