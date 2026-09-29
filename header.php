<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header class="w-full font-sans shadow-sm relative z-50">
    <div class="bg-white">
      <div class="container py-3 lg:py-4 flex justify-between items-center gap-4">
        <div class="flex-shrink-0">
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="block">
              <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-footer.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="custom-logo">
            </a>
          <?php endif; ?>
        </div>

        <div class="flex items-end flex-col gap-6">
          <div class="hidden lg:flex items-center gap-5 lg:text-sm text-[#1D2834]">
            <div class="flex items-center gap-1.5">
              <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              <span><?php echo cusco_l10n( 'Phone: +51 940 897 605', 'Teléfono: +51 940 897 605' ); ?></span>
            </div>
            <div class="flex items-center gap-1.5">
              <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <a href="mailto:reservas@cuscotravelservice.com" class="hover:text-[#008323] transition">reservas@cuscotravelservice.com</a>
            </div>

            <div class="hidden xl:flex gap-2">
              <a href="#" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 24 24" class="w-3 h-3">
                  <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                </svg>
              </a>
              <a href="#" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 24 24" class="w-3 h-3">
                  <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
                </svg>
              </a>
              <a href="#" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 24 24" class="w-3 h-3">
                  <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                </svg>
              </a>
              <a href="#" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 24 24" class="w-3 h-3">
                  <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z" />
                </svg>
              </a>
            </div>

            <div class="flex items-center gap-4">
              <!-- <a href="#" class="hover:text-[#008323] transition">About Us</a> -->
              <!-- <a href="#" class="hover:text-[#008323] transition">Blog</a> -->
              <!-- <div class="flex items-center gap-1 cursor-pointer hover:text-[#008323] transition">
                <span>English</span>
                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                </svg>
              </div> -->
            </div>
          </div>

          <div class="hidden xl:block">
            <div class="flex items-center gap-6">

            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'main-menu',
                'menu_class'     => 'flex items-center gap-7 text-[#1D2834] text-[13px] font-bold uppercase tracking-wider',
                'container'      => false,
                'walker'         => new Cusco_Walker_Nav_Menu(),
                'fallback_cb'    => 'cusco_default_menu_desktop',
            ));
            ?>
              <a href="#" class="bg-[#ffcc00] text-black font-extrabold px-6 py-2.5 rounded-[5px] hover:bg-yellow-400 transition-colors text-[13px] uppercase tracking-wide whitespace-nowrap">
                <?php echo cusco_l10n( 'CONTACT US', 'CONTÁCTANOS' ); ?>
              </a>
            </div>
          </div>
        </div>

        <button id="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false" aria-label="<?php echo esc_attr( cusco_l10n( 'Open menu', 'Abrir menú' ) ); ?>" class="xl:hidden text-[#1D2834] p-2 hover:bg-gray-100 rounded-md transition">
          <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
          </svg>
        </button>
      </div>
    </div>
  </header>

  <aside id="mobile-menu" class="fixed inset-0 z-[100] xl:hidden invisible opacity-0 transition-opacity duration-300">
    <div id="mobile-menu-backdrop" class="absolute inset-0 bg-[#1D2834]/60 backdrop-blur-sm"></div>

    <div id="mobile-menu-panel" class="absolute right-0 top-0 h-full w-full max-w-[380px] bg-white shadow-2xl flex flex-col translate-x-full transition-transform duration-300 ease-out">
      <div class="flex items-center justify-between px-6 py-5 border-b border-gray-100">
        <div class="mobile-menu-logo">
          <?php if (has_custom_logo()) : ?>
            <?php the_custom_logo(); ?>
          <?php else : ?>
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/logo-footer.png'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-11 object-contain">
          <?php endif; ?>
        </div>
        <button id="mobile-menu-close" aria-label="<?php echo esc_attr( cusco_l10n( 'Close menu', 'Cerrar menú' ) ); ?>" class="text-[#1D2834] p-2 hover:bg-gray-100 rounded-md transition">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
          </svg>
        </button>
      </div>

      <div class="flex-1 overflow-y-auto px-6 py-4 font-sans">
        <?php
            wp_nav_menu(array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'mobile-main-menu',
                'menu_class'     => 'flex flex-col divide-y divide-gray-100',
                'container'      => false,
                'walker'         => new Cusco_Walker_Mobile_Nav_Menu(),
                'fallback_cb'    => 'cusco_default_menu_mobile',
            ));
            ?>
      </div>

      <div class="px-6 py-6 border-t border-gray-100 flex flex-col gap-4 font-sans">
        <a href="#" class="w-full text-center bg-[#ffcc00] text-black font-extrabold px-6 py-3 rounded-[5px] hover:bg-yellow-400 transition-colors text-[13px] uppercase tracking-wide">
          <?php echo cusco_l10n( 'CONTACT US', 'CONTÁCTANOS' ); ?>
        </a>
        <div class="flex items-center gap-2 text-[#1D2834] text-[13px]">
          <svg class="w-4 h-4 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          <span>+51 940 897 605</span>
        </div>
        <div class="flex gap-2.5">
          <a href="#" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-3.5 h-3.5">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.07zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
          </a>
          <a href="#" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 24 24" class="w-3.5 h-3.5">
              <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </aside>