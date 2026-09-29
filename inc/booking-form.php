<?php
/**
 * Contact Form 7 helpers for the tour booking form (aside of single-tour.php).
 *
 * The form itself lives in CF7 (shortcode id="c310078"). These helpers keep
 * the custom markup intact and pre-fill the "interested-in" field with the
 * current tour title.
 *
 * @package cusco
 */

/*
 * Do not run CF7's autop on the form content, so the <div class="tbf-field">
 * wrappers in the form template are not broken up with <p>/<br>.
 */
add_filter( 'wpcf7_autop_or_not', '__return_false' );

/**
 * Pre-fill the CF7 field named "interested-in" with the current tour title.
 *
 * @param WPCF7_FormTag|array $tag The form tag being generated.
 * @return WPCF7_FormTag|array
 */
function cusco_cf7_prefill_tour_title( $tag ) {
	$is_object = ( class_exists( 'WPCF7_FormTag' ) && $tag instanceof WPCF7_FormTag );
	$name      = $is_object ? $tag->name : ( is_array( $tag ) ? ( isset( $tag['name'] ) ? $tag['name'] : '' ) : '' );

	if ( 'interested-in' !== $name || ! is_singular( 'tour' ) ) {
		return $tag;
	}

	$title = get_the_title( get_queried_object_id() );

	if ( $is_object ) {
		$tag->values     = array( $title );
		$tag->raw_values = array( $title );
	} elseif ( is_array( $tag ) ) {
		$tag['values']     = array( $title );
		$tag['raw_values'] = array( $title );
	}

	return $tag;
}
add_filter( 'wpcf7_form_tag', 'cusco_cf7_prefill_tour_title', 10, 1 );
