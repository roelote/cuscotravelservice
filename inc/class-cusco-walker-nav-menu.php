<?php
/**
 * Walker for the desktop dropdown navigation menu.
 *
 * @package cusco
 */

class Cusco_Walker_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		if ( 0 === $depth ) {
			$output .= '<ul class="absolute left-0 top-full min-w-[240px] bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">';
		} else {
			$output .= '<ul class="absolute left-full top-0 min-w-[220px] bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible translate-x-2 group-hover:opacity-100 group-hover:visible group-hover:translate-x-0 transition-all duration-200 z-50">';
		}
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );

		$output .= '<li class="' . ( $has_children ? 'group relative' : '' ) . '">';

		$link_classes = 0 === $depth
			? 'flex items-center gap-1 py-2 hover:text-[#008323] transition-colors'
			: 'flex items-center justify-between gap-2 px-5 py-2.5 text-[#1D2834] text-[12px] normal-case font-semibold tracking-normal hover:bg-[#E8F4EA] hover:text-[#008323] transition-colors';

		$output .= '<a class="' . esc_attr( $link_classes ) . '" href="' . esc_url( $item->url ) . '">';
		$output .= esc_html( $item->title );

		if ( $has_children ) {
			$icon_classes = 0 === $depth
				? 'w-3 h-3 mt-0.5 transition-transform group-hover:rotate-180'
				: 'w-3 h-3 -rotate-90';
			$output      .= '<svg class="' . $icon_classes . '" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>';
		}

		$output .= '</a>';
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$output .= '</li>';
	}
}
