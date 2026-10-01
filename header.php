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

        <div class="flex items-end flex-col gap-5">
          <div class="hidden lg:flex items-center gap-5 lg:text-sm text-[#1D2834] justify-end">
            <div class="flex items-center gap-1.5">
              <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
              </svg>
              <span><?php echo cusco_l10n('Phone: +51 940 897 605', 'Teléfono: +51 940 897 605'); ?></span>
            </div>
            <div class="flex items-center gap-1.5">
              <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
              </svg>
              <a href="mailto:reservas@cuscotravelservice.com" class="hover:text-[#008323] transition">reservas@cuscotravelservice.com</a>
            </div>

            <div class="hidden xl:flex gap-5 items-center">
              <a href="https://web.facebook.com/cuscotavelservice" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 512 512" class="w-3 h-3">
                  <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
                </svg>
              </a>
              <a href="https://www.instagram.com/cusco_travel_service" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 448 512" class="w-3 h-3">
                  <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                </svg>
              </a>
              <a href="https://www.tiktok.com/@cusco_travel_service?lang=es" target="_blank" rel="noopener noreferrer" aria-label="TikTok" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 448 512" class="w-3 h-3">
                  <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                </svg>
              </a>
              <a href="https://www.tripadvisor.es/Attraction_Review-g294314-d27764331-Reviews-Cusco_Travel_Service-Cusco_Cusco_Region.html" target="_blank" rel="noopener noreferrer" aria-label="Tripadvisor" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 576 512" class="w-3 h-3">
                  <path d="M528.91,178.82,576,127.58H471.66a326.11,326.11,0,0,0-367,0H0l47.09,51.24A143.911,143.911,0,0,0,241.86,390.73L288,440.93l46.11-50.17A143.94,143.94,0,0,0,575.88,285.18h-.03A143.56,143.56,0,0,0,528.91,178.82ZM144.06,382.57a97.39,97.39,0,1,1,97.39-97.39A97.39,97.39,0,0,1,144.06,382.57ZM288,282.37c0-64.09-46.62-119.08-108.09-142.59a281,281,0,0,1,216.17,0C334.61,163.3,288,218.29,288,282.37Zm143.88,100.2h-.01a97.405,97.405,0,1,1,.01,0ZM144.06,234.12h-.01a51.06,51.06,0,1,0,51.06,51.06v-.11A51,51,0,0,0,144.06,234.12Zm287.82,0a51.06,51.06,0,1,0,51.06,51.06A51.06,51.06,0,0,0,431.88,234.12Z" />
                </svg>
              </a>
              <a href="https://wa.me/51984041031" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="w-6 h-6 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition">
                <svg fill="currentColor" viewBox="0 0 448 512" class="w-3 h-3">
                  <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
                </svg>
              </a>
              <a href="#" class="hidden bg-[#ffcc00] hover:bg-yellow-500 text-black font-extrabold px-6 py-2.5 rounded-[5px] transition-colors text-[13px] uppercase tracking-wide whitespace-nowrap">
                <?php echo cusco_l10n('CONTACT US', 'CONTÁCTANOS'); ?>
              </a>
              <?php echo do_shortcode('[minimalist_lang_switcher]'); ?>
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
            </div>
          </div>
        </div>

        <style>
          /* Contenedor principal */
          .minimalist-pll-dropdown {
            position: relative;
            display: inline-block;
            font-family: inherit;
          }

          /* Botón principal */
          .pll-dropdown-toggle {
            background: transparent;
            border: 1px solid #eaeaea;
            padding: 8px 12px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            border-radius: 6px;
            font-size: 14px;
            color: #333;
            transition: background 0.3s ease, border-color 0.3s ease;
          }

          .pll-dropdown-toggle:hover {
            background: #f9f9f9;
            border-color: #ddd;
          }

          /* Icono de flecha (Caret) */
          .pll-caret {
            display: inline-block;
            width: 0;
            height: 0;
            margin-left: 4px;
            vertical-align: middle;
            border-top: 4px solid #666;
            border-right: 4px solid transparent;
            border-left: 4px solid transparent;
          }

          /* Menú desplegable */
          .pll-dropdown-menu {
            display: none;
            /* Oculto por defecto */
            position: absolute;
            top: calc(100% + 6px);
            left: 0;
            background: #fff;
            min-width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #eaeaea;
            border-radius: 6px;
            z-index: 9999;
            flex-direction: column;
            overflow: hidden;
          }

          /* Clase activa para mostrar el menú */
          .minimalist-pll-dropdown.active .pll-dropdown-menu {
            display: flex;
            animation: fadeIn 0.2s ease;
          }

          /* Enlaces de idioma */
          .pll-lang-item {
            padding: 10px 12px;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none !important;
            color: #555;
            font-size: 14px;
            transition: background 0.2s ease, color 0.2s ease;
          }

          .pll-lang-item:hover {
            background: #f4f4f4;
            color: #000;
          }

          /* Ajuste de las banderas */
          .pll-lang-item img,
          .pll-dropdown-toggle img {
            width: 18px !important;
            height: auto !important;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
          }

          @keyframes fadeIn {
            from {
              opacity: 0;
              transform: translateY(-5px);
            }

            to {
              opacity: 1;
              transform: translateY(0);
            }
          }

          /* Ajuste de las banderas SVG */
          .pll-svg-flag {
            width: 20px !important;
            height: 15px !important;
            object-fit: cover;
            /* Evita que el SVG se deforme */
            border-radius: 2px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15);
            display: inline-block;
          }
        </style>

        <script>
          document.addEventListener('DOMContentLoaded', function() {
            const dropdowns = document.querySelectorAll('.minimalist-pll-dropdown');

            dropdowns.forEach(dropdown => {
              const toggle = dropdown.querySelector('.pll-dropdown-toggle');

              // Abrir/Cerrar al hacer clic
              toggle.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                // Cerrar otros dropdowns si hay más de uno
                dropdowns.forEach(d => {
                  if (d !== dropdown) d.classList.remove('active')
                });

                dropdown.classList.toggle('active');
              });
            });

            // Cerrar al hacer clic fuera del dropdown
            document.addEventListener('click', function(e) {
              dropdowns.forEach(dropdown => {
                if (!dropdown.contains(e.target)) {
                  dropdown.classList.remove('active');
                }
              });
            });
          });
        </script>

        <button id="mobile-menu-toggle" aria-controls="mobile-menu" aria-expanded="false" aria-label="<?php echo esc_attr(cusco_l10n('Open menu', 'Abrir menú')); ?>" class="xl:hidden text-[#1D2834] p-2 hover:bg-gray-100 rounded-md transition">
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
        <button id="mobile-menu-close" aria-label="<?php echo esc_attr(cusco_l10n('Close menu', 'Cerrar menú')); ?>" class="text-[#1D2834] p-2 hover:bg-gray-100 rounded-md transition">
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
          <?php echo cusco_l10n('CONTACT US', 'CONTÁCTANOS'); ?>
        </a>
        <div class="flex items-center gap-2 text-[#1D2834] text-[13px]">
          <svg class="w-4 h-4 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
          </svg>
          <span>+51 940 897 605</span>
        </div>
        <div class="flex gap-2.5">
          <a href="https://web.facebook.com/cuscotavelservice" target="_blank" rel="noopener noreferrer" aria-label="Facebook" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 512 512" class="w-3.5 h-3.5">
              <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z" />
            </svg>
          </a>
          <a href="https://www.instagram.com/cusco_travel_service" target="_blank" rel="noopener noreferrer" aria-label="Instagram" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 448 512" class="w-3.5 h-3.5">
              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>
          </a>
          <a href="https://www.tiktok.com/@cusco_travel_service?lang=es" target="_blank" rel="noopener noreferrer" aria-label="TikTok" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 448 512" class="w-3.5 h-3.5">
              <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
            </svg>
          </a>
          <a href="https://www.tripadvisor.es/Attraction_Review-g294314-d27764331-Reviews-Cusco_Travel_Service-Cusco_Cusco_Region.html" target="_blank" rel="noopener noreferrer" aria-label="Tripadvisor" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 576 512" class="w-3.5 h-3.5">
              <path d="M528.91,178.82,576,127.58H471.66a326.11,326.11,0,0,0-367,0H0l47.09,51.24A143.911,143.911,0,0,0,241.86,390.73L288,440.93l46.11-50.17A143.94,143.94,0,0,0,575.88,285.18h-.03A143.56,143.56,0,0,0,528.91,178.82ZM144.06,382.57a97.39,97.39,0,1,1,97.39-97.39A97.39,97.39,0,0,1,144.06,382.57ZM288,282.37c0-64.09-46.62-119.08-108.09-142.59a281,281,0,0,1,216.17,0C334.61,163.3,288,218.29,288,282.37Zm143.88,100.2h-.01a97.405,97.405,0,1,1,.01,0ZM144.06,234.12h-.01a51.06,51.06,0,1,0,51.06,51.06v-.11A51,51,0,0,0,144.06,234.12Zm287.82,0a51.06,51.06,0,1,0,51.06,51.06A51.06,51.06,0,0,0,431.88,234.12Z" />
            </svg>
          </a>
          <a href="https://wa.me/51984041031" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp" class="w-8 h-8 rounded-full bg-[#E8F4EA] flex items-center justify-center text-[#1D2834] hover:bg-[#008323] hover:text-white transition-colors">
            <svg fill="currentColor" viewBox="0 0 448 512" class="w-3.5 h-3.5">
              <path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z" />
            </svg>
          </a>
        </div>
      </div>
    </div>
  </aside>