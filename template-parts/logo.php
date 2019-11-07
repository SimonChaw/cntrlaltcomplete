<?php
/**
 * Displays the logo for the site
 *
 * @package WordPress
 * @subpackage CntrlAltComplete
 * @since 1.0.0
 */
?>
<?php if ( has_custom_logo() ) : ?>
  <div class=""><?php the_custom_logo(); ?></div>
<?php endif; ?>
