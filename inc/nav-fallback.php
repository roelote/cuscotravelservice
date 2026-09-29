<?php
/**
 * Fallback menu output used when no menu is assigned to the 'menu-1' location
 * in Appearance > Menus. Mirrors the markup produced by the theme's nav walkers.
 *
 * @package cusco
 */

/**
 * Shared menu structure for the fallback desktop and mobile menus.
 */
function cusco_default_menu_items() {
	return array(
		// array(
		// 	'label' => 'HOME',
		// 	'url'   => home_url( '/' ),
		// ),
		array(
			'label'    => 'CLASSIC TOURS',
			'url'      => '#',
			'children' => array(
				array( 'label' => 'Cusco City Tour', 'url' => '#' ),
				array( 'label' => 'Sacred Valley Tour', 'url' => '#' ),
				array( 'label' => 'Rainbow Mountain Hike', 'url' => '#' ),
			),
		),
		array(
			'label'    => 'TOURS MACHU PICCHU',
			'url'      => '#',
			'children' => array(
				array( 'label' => 'Machu Picchu Full Day', 'url' => '#' ),
				array( 'label' => 'Inca Trail 4D / 3N', 'url' => '#' ),
				array( 'label' => 'Salkantay Trek 5D / 4N', 'url' => '#' ),
			),
		),
		array(
			'label' => 'TREKKING TOURS',
			'url'   => '#',
		),
		array(
			'label' => 'FULL DAY HIKES',
			'url'   => '#',
		),
		array(
			'label' => 'ADVENTURE TOURS',
			'url'   => '#',
		),
	);
}

/**
 * Fallback for the desktop dropdown menu.
 */
function cusco_default_menu_desktop() {
	$items = cusco_default_menu_items();

	echo '<ul class="flex items-center gap-7 text-[#1D2834] text-[13px] font-bold uppercase tracking-wider">';

	foreach ( $items as $item ) {
		$has_children = ! empty( $item['children'] );

		echo '<li class="' . ( $has_children ? 'group relative' : '' ) . '">';
		echo '<a href="' . esc_url( $item['url'] ) . '" class="flex items-center gap-1 py-2 hover:text-[#008323] transition-colors">';
		echo esc_html( $item['label'] );

		if ( $has_children ) {
			echo '<svg class="w-3 h-3 mt-0.5 transition-transform group-hover:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>';
		}

		echo '</a>';

		if ( $has_children ) {
			echo '<ul class="absolute left-0 top-full min-w-[240px] bg-white rounded-xl shadow-xl border border-gray-100 py-2 opacity-0 invisible translate-y-2 group-hover:opacity-100 group-hover:visible group-hover:translate-y-0 transition-all duration-200 z-50">';
			foreach ( $item['children'] as $child ) {
				echo '<li><a href="' . esc_url( $child['url'] ) . '" class="block px-5 py-2.5 text-[#1D2834] text-[12px] normal-case font-semibold tracking-normal hover:bg-[#E8F4EA] hover:text-[#008323] transition-colors">' . esc_html( $child['label'] ) . '</a></li>';
			}
			echo '</ul>';
		}

		echo '</li>';
	}

	echo '</ul>';
}

/**
 * Fallback for the mobile off-canvas accordion menu.
 */
function cusco_default_menu_mobile() {
	$items = cusco_default_menu_items();

	echo '<ul class="flex flex-col divide-y divide-gray-100">';

	foreach ( $items as $item ) {
		$has_children = ! empty( $item['children'] );

		echo '<li class="py-1">';

		if ( $has_children ) {
			echo '<details class="group">';
			echo '<summary class="flex items-center justify-between py-3 text-[#1D2834] text-[14px] font-bold uppercase tracking-wide cursor-pointer list-none">';
			echo esc_html( $item['label'] );
			echo '<svg class="w-4 h-4 transition-transform group-open:rotate-180" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path></svg>';
			echo '</summary>';
			echo '<ul class="pl-4 pb-2 flex flex-col gap-1">';
			foreach ( $item['children'] as $child ) {
				echo '<li><a href="' . esc_url( $child['url'] ) . '" class="block py-2 text-[#1D2834]/80 text-[13px] font-medium hover:text-[#008323] transition-colors">' . esc_html( $child['label'] ) . '</a></li>';
			}
			echo '</ul>';
			echo '</details>';
		} else {
			echo '<a href="' . esc_url( $item['url'] ) . '" class="block py-3 text-[#1D2834] text-[14px] font-bold uppercase tracking-wide hover:text-[#008323] transition-colors">' . esc_html( $item['label'] ) . '</a>';
		}

		echo '</li>';
	}

	echo '</ul>';
}
