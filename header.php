<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class( 'h-screen' ); ?>>
<?php wp_body_open(); ?>
<div id="page" class="flex flex-col bg-gray-100" style="height:inherit;">
	<header class="flex items-center justify-between bg-gray-900 align-stretch" style="min-height:4rem;">

		<div class="ml-6">
      <?php if( has_custom_logo() ):?>
			   <?php get_template_part( 'template-parts/logo' ); ?>
      <?php else: ?>
        <h1 class="uppercase text-gray-100 text-4xl sm:text-2xl"><?php echo get_bloginfo( 'name' ); ?></h1>
      <?php endif; ?>
		</div>

    <div>
      <?php
        if ( has_nav_menu( 'primary' ) ) {
          $args = array(
              'theme_location'    => 'primary',
              'menu_class'        => 'flex',
              'container'         => false
          );
          wp_nav_menu( $args );
        }
      ?>
    </div>
	</header>

	<div id="content" class="bg-gray-800" style="flex-grow:1;">
