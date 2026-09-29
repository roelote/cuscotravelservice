<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package cusco
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function cusco_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'cusco_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function cusco_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'cusco_pingback_header' );

/**
 * Returns hard-coded theme text (front page, header, footer, single-tour, etc.)
 * in English or Spanish based on the active Polylang language.
 *
 * Falls back to Spanish when Polylang is not active or the current language isn't English,
 * since these strings live directly in the template files and are not editable from wp-admin.
 *
 * @param string $en English version of the string.
 * @param string $es Spanish version of the string.
 * @return string
 */
function cusco_l10n( $en, $es ) {
	if ( function_exists( 'pll_current_language' ) && pll_current_language() === 'en' ) {
		return $en;
	}

	return $es;
}
