<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Coffee-Sugar
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function coffee_sugar_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'coffee_sugar_jetpack_setup' );
