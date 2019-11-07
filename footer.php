<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage CntrlAltComplete
 * @since 1.0.0
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="bg-gray-900">
		<?php get_template_part( 'template-parts/footer-widgets', 'widgets' ); ?>
		<div class="text-gray-100 flex items-center justify-center" style="min-height:3rem;">
			<a href="http://cntrlaltcomplete.com" class="text-sm font-light">
				Template by Simon Chawla
			</a>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
