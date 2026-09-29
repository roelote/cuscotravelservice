<?php
/**
 * Walker for the mobile off-canvas accordion navigation menu.
 *
 * @package cusco
 */

class Cusco_Walker_Mobile_Nav_Menu extends Walker_Nav_Menu {

	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="pl-4 pb-2 flex flex-col gap-1">';
	}

	public function end_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '</ul>';
	}

	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );

		$output .= '<li class="py-1">';

		if ( 0 === $depth && $has_children ) {
			$output .= '<details class="group">';
			$output .= '<summary class="flex items-center justify-between py-3 text-[#1D2834] text-[14px] font-bold uppercase tracking-wide cursor-pointer list-none">';
			$output .= esc_html( $item->title );
			$output .= '<svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>';
			$output .= '</summary>';
		} else {
			$link_classes = 0 === $depth
				? 'block py-3 text-[#1D2834] text-[14px] font-bold uppercase tracking-wide hover:text-[#008323] transition-colors'
				: 'block py-2 text-[#1D2834]/80 text-[13px] font-medium hover:text-[#008323] transition-colors';
			$output      .= '<a class="' . esc_attr( $link_classes ) . '" href="' . esc_url( $item->url ) . '">' . esc_html( $item->title ) . '</a>';
		}
	}

	public function end_el( &$output, $item, $depth = 0, $args = null ) {
		$classes      = empty( $item->classes ) ? array() : (array) $item->classes;
		$has_children = in_array( 'menu-item-has-children', $classes, true );

		if ( 0 === $depth && $has_children ) {
			$output .= '</details>';
		}

		$output .= '</li>';
	}
}
