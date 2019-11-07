<?php
/**
 * Displays the footer widget area
 *
 * @package WordPress
 * @subpackage CntrlAltComplete
 * @since 1.0.0
 */

if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="" role="complementary" aria-label="<?php esc_attr_e( 'Footer', 'cntrlaltcomplete' ); ?>">
		<?php
		if ( is_active_sidebar( 'sidebar-1' ) ) {
			?>
					<div class="">
					<?php dynamic_sidebar( 'sidebar-1' ); ?>
					</div>
				<?php
		}
		?>
	</aside><!-- .widget-area -->

<?php endif; ?>
