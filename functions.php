<?php
/**
 * CntrlAltComplete functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage CntrlAltComplete
 * @since 1.0.0
 */
 $menu_colors = [
   'bg-red',
   'bg-teal',
   'bg-yellow',
   'bg-orange',
 ];

 $GLOBALS['menu_colors'] = $menu_colors;

 function enqueue_master_style() {
     wp_enqueue_style( 'style', get_stylesheet_uri() );
 }
 add_action( 'wp_enqueue_scripts', 'enqueue_master_style' );

 function setup_menu() {
     register_nav_menus( array(
             'primary' => esc_html__( 'Primary Menu', 'cntrlaltcomplete' ),
             'footer'  => esc_html__( 'Footer Menu', 'cntrlaltcomplete' ),
     ) );
 }
 add_action( 'after_setup_theme', 'setup_menu' );

 function get_color( $index, $tone = 500, $hover = true ) {

   global $menu_colors;

   while ( $index > count( $menu_colors ) - 1 ) {
     global $menu_colors;

     $index = $index - count( $menu_colors );
     $index < 0 ? 0 : $index;
   }

   $str  = $menu_colors[$index];
   $str .= '-' . (string)$tone;
   $str .= $hover ? ' hover:' . $menu_colors[$index] . '-' . (string)( $tone + 100 ) : '';

   return $str;
 }
 //add_filter( 'after_setup_theme', 'get_color', 10, 3 );

 function customize_menu( $classes, $item ) {

   $index  = $item->menu_order - 1;
   $colors = get_color( $index, 500, true );

   $classes[] = $colors . " cursor-pointer px-8 py-4 text-gray-100 w-full text-center font-b text-2xl sm:text-xl flex items-center justify-center";
   return $classes;
 }
 add_filter( 'nav_menu_css_class', 'customize_menu', 10, 2 );
