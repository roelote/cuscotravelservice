/**
 * File mobile-menu.js.
 *
 * Handles the off-canvas mobile menu (hamburger toggle, backdrop, Escape key).
 */
( function () {
	const toggle   = document.getElementById( 'mobile-menu-toggle' );
	const menu     = document.getElementById( 'mobile-menu' );
	const panel    = document.getElementById( 'mobile-menu-panel' );
	const backdrop = document.getElementById( 'mobile-menu-backdrop' );
	const closeBtn = document.getElementById( 'mobile-menu-close' );

	if ( ! toggle || ! menu || ! panel || ! backdrop ) {
		return;
	}

	function openMenu() {
		menu.classList.remove( 'invisible', 'opacity-0' );
		panel.classList.remove( 'translate-x-full' );
		document.body.classList.add( 'overflow-hidden' );
		toggle.setAttribute( 'aria-expanded', 'true' );
	}

	function closeMenu() {
		menu.classList.add( 'opacity-0' );
		panel.classList.add( 'translate-x-full' );
		document.body.classList.remove( 'overflow-hidden' );
		toggle.setAttribute( 'aria-expanded', 'false' );
		window.setTimeout( function () {
			menu.classList.add( 'invisible' );
		}, 300 );
	}

	toggle.addEventListener( 'click', function () {
		if ( toggle.getAttribute( 'aria-expanded' ) === 'true' ) {
			closeMenu();
		} else {
			openMenu();
		}
	} );

	if ( closeBtn ) {
		closeBtn.addEventListener( 'click', closeMenu );
	}

	backdrop.addEventListener( 'click', closeMenu );

	document.addEventListener( 'keydown', function ( event ) {
		if ( event.key === 'Escape' ) {
			closeMenu();
		}
	} );
}() );
