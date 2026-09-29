<?php

/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package cusco
 */

get_header();
?>

<section>

  <div class="relative w-full h-[500px] md:h-[800px] flex items-center overflow-hidden">

    <!-- Background: Smart Slider 3 -->
    <div class="absolute inset-0 w-full h-full z-0">
      <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
    </div>

    <!-- Gradient overlay -->
    <div class="absolute inset-0 bg-gradient-to-r from-[#1D2834]/85 via-[#1D2834]/40 to-transparent z-10 pointer-events-none"></div>

    <!-- Main content -->
    <div class="relative z-20 w-full container mx-auto pointer-events-none">
      <div class="max-w-[650px]">
        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full border border-white/20 bg-white/10 backdrop-blur-md mb-6">
          <span class="w-1.5 h-1.5 rounded-full bg-[#ffcc00]"></span>
          <span class="text-white text-[10px] font-bold tracking-widest uppercase"><?php echo cusco_l10n( 'RECOMMENDED TOUR 2026', 'TOUR RECOMENDADO 2026' ); ?></span>
        </div>

        <h1 class="font-serif text-[50px] md:text-[75px] leading-[1.05] mb-6">
          <span class="block font-bold text-white">MACHU PICCHU</span>
          <span class="block font-bold text-[#ffcc00]"><?php echo cusco_l10n( 'FULL DAY', 'DÍA COMPLETO' ); ?></span>
        </h1>

        <p class="text-gray-200 text-[15px] leading-relaxed mb-10">
          <?php echo cusco_l10n( 'This tour is recommended for all people who lack time and wish to visit Machu Picchu with the best times and at the best price. Discover the ancient city of the Incas in a seamless, unforgettable single-day expedition.', 'Este tour es recomendado para todas las personas que no cuentan con mucho tiempo y desean visitar Machu Picchu en los mejores horarios y al mejor precio. Descubre la antigua ciudad de los incas en una expedición de un solo día, fluida e inolvidable.' ); ?>
        </p>

        <div class="flex flex-wrap items-center gap-4" style="pointer-events:auto">
          <a href="#" class="bg-[#ffcc00] text-black font-extrabold text-[12px] px-8 py-3.5 uppercase tracking-wider hover:bg-yellow-500 transition-colors">
            <?php echo cusco_l10n( 'BOOK A TOUR', 'RESERVA UN TOUR' ); ?>
          </a>
          <a href="#" class="border border-white/60 text-white font-extrabold text-[12px] px-8 py-3.5 uppercase tracking-wider hover:bg-white hover:text-black transition-colors">
            <?php echo cusco_l10n( 'VIEW ITINERARY', 'VER ITINERARIO' ); ?>
          </a>
        </div>

      </div>
    </div>
  </div>


  <div class="bg-white py-16">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-12">
      <div class="">
        <h2 class="text-[#1D2834] text-[28px] font-extrabold uppercase tracking-tight mb-2">
          <?php echo cusco_l10n( 'CUSCO TRAVEL SERVICE TRAVEL AGENCY', 'AGENCIA DE VIAJES CUSCO TRAVEL SERVICE' ); ?>
        </h2>
        <div class="w-14 h-1 bg-[#008323] mb-6"></div>

        <p class="text-gray-600 text-[15px] leading-relaxed mb-5">
          <?php echo cusco_l10n( 'Authentic and professional travel agency with a work team passionate about its culture and history, We have the best programs such as Inca trail, Machu Picchu tours by train, We have day trips, such as Rainbow Mountain Hike, Incas Sacred Valley, Humantay Lake, Pallaypunchu mountain Hike.', 'Agencia de viajes auténtica y profesional con un equipo de trabajo apasionado por su cultura e historia. Contamos con los mejores programas como el Camino Inca, tours a Machu Picchu en tren, y excursiones de un día como la Montaña de 7 Colores, el Valle Sagrado de los Incas, la Laguna Humantay y la caminata a la montaña Pallaypunchu.' ); ?>
        </p>
        <p class="text-gray-600 text-[15px] leading-relaxed mb-10">
          <?php echo cusco_l10n( 'Palcoyo Mountain Hike, Waqrapukara Hike, We have also prepared 4-day and 7-day programs covering North, South and Central Peru, Ica, Lake Titicaca, Colca Canyon and more with the best destinations that you should not leave to visit, choose the one of your preference.', 'Caminata a la montaña Palcoyo, caminata a Waqrapukara. También hemos preparado programas de 4 y 7 días que abarcan el norte, sur y centro de Perú, Ica, el Lago Titicaca, el Cañón del Colca y más, con los mejores destinos que no debes dejar de visitar; elige el de tu preferencia.' ); ?>
        </p>

        <div class="flex gap-4 w-full mb-10">
          <div class="flex gap-3 items-start w-1/3">
            <div class="w-10 h-10 rounded-full bg-[#E8F4EA] flex items-center justify-center shrink-0 text-[#1D2834]">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
            </div>
            <div>
              <h4 class="text-[#1D2834] text-[11px] font-bold uppercase mb-1"><?php echo cusco_l10n( 'PROFESSIONAL TEAM', 'EQUIPO PROFESIONAL' ); ?></h4>
              <p class="text-gray-500 text-[11px] leading-tight"><?php echo cusco_l10n( 'Our professional team is ready to help.', 'Nuestro equipo profesional está listo para ayudarte.' ); ?></p>
            </div>
          </div>

          <div class="flex gap-3 items-start w-1/3">
            <div class="w-10 h-10 rounded-full bg-[#E8F4EA] flex items-center justify-center shrink-0 text-[#008323]">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
              </svg>
            </div>
            <div>
              <h4 class="text-[#1D2834] text-[11px] font-bold uppercase mb-1"><?php echo cusco_l10n( 'UNIQUE EXPERIENCE', 'EXPERIENCIA ÚNICA' ); ?></h4>
              <p class="text-gray-500 text-[11px] leading-tight"><?php echo cusco_l10n( 'Our professional team is ready to help.', 'Nuestro equipo profesional está listo para ayudarte.' ); ?></p>
            </div>
          </div>

          <div class="flex gap-3 items-start w-1/3">
            <div class="w-10 h-10 rounded-full bg-[#E8F4EA] flex items-center justify-center shrink-0 text-[#1D2834]">
              <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
              </svg>
            </div>
            <div>
              <h4 class="text-[#1D2834] text-[11px] font-bold uppercase mb-1"><?php echo cusco_l10n( 'TAILOR - MADE- TOURS', 'TOURS A LA MEDIDA' ); ?></h4>
              <p class="text-gray-500 text-[11px] leading-tight"><?php echo cusco_l10n( 'Our professional team is ready to help.', 'Nuestro equipo profesional está listo para ayudarte.' ); ?></p>
            </div>
          </div>

        </div>

        <a href="/about-us" class="bg-[#008323] text-white px-8 py-3 rounded-full font-bold text-sm tracking-wide shadow-sm hover:bg-[#00691c] transition-colors">
          <?php echo cusco_l10n( 'ABOUT US', 'SOBRE NOSOTROS' ); ?>
        </a>

      </div>

      <div class="">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/about-us.png'); ?>" alt="About Us" class="w-full h-auto rounded-xl shadow-md object-cover">
      </div>

    </div>
  </div>


  <div class="bg-white py-12">
    <div class="container ">
      <div class="flex flex-col md:flex-row gap-5 items-start justify-between lg:items-end mb-8">
        <div>
          <div class="flex items-center gap-2 mb-1">
            <div class="w-8 h-[2px] bg-[#008323]"></div>
            <span class="text-[#008323] font-bold text-[10px] tracking-widest uppercase"><?php echo cusco_l10n( 'EXCURSIONS', 'EXCURSIONES' ); ?></span>
          </div>
          <h2 class="text-[#1D2834] text-[26px] font-extrabold uppercase tracking-tight"><?php echo cusco_l10n( 'OUR RECOMMENDED TOURS', 'NUESTROS TOURS RECOMENDADOS' ); ?></h2>
        </div>
        <a href="#" class="border border-[#008323] text-[#008323] font-bold text-[11px] px-6 py-2.5 hover:bg-[#008323] hover:text-white transition-colors">
          <?php echo cusco_l10n( 'SEE ALL TOURS', 'VER TODOS LOS TOURS' ); ?>
        </a>
      </div>

      <div class="relative px-1 sm:px-8">
        <div class="swiper related-tours-swiper">
          <div class="swiper-wrapper">
            <?php
            $args = array(
              'post_type'      => 'tour',
              'posts_per_page' => -1,
              'category_name'  => 'inca-trail',
              'orderby'        => 'date',
              'order'          => 'DESC',
              'post__not_in' => array(get_the_ID())
            );

            $query_posts = new WP_Query($args);

            if ($query_posts->have_posts()) :
              while ($query_posts->have_posts()) : $query_posts->the_post();
                $categories = get_the_category();
                $cat_name   = !empty($categories) ? esc_html($categories[0]->name) : 'General';

                $img_url = has_post_thumbnail()
                  ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large')
                  : 'https://images.unsplash.com/photo-1531065208531-4036c0dba3ca?auto=format&fit=crop&w=800&q=80';
            ?>
                <div class="swiper-slide !h-auto">
                  <div class="h-full rounded-[12px] border border-gray-200 bg-white p-3.5 shadow-sm flex flex-col">
                    <img src="<?php echo esc_url($img_url); ?>" alt="Inca Trail" class="w-full h-[170px] object-cover rounded-[8px] mb-4">
                    <h3 class="font-bold text-[#1D2834] text-base leading-snug mb-3"><?php the_title(); ?></h3>

                    <div class="flex items-center gap-3 text-gray-500 text-[10px] font-semibold mb-3">
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <?php echo cusco_l10n( '4 Days 3 Nights', '4 Días 3 Noches' ); ?>
                      </div>
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <?php echo cusco_l10n( 'Moderate', 'Moderado' ); ?>
                      </div>
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <?php echo cusco_l10n( '17 People', '17 Personas' ); ?>
                      </div>
                    </div>

                    <p class="text-gray-400 text-sm leading-relaxed mb-5 flex-grow line-clamp-2">
                      <?php echo get_the_excerpt() ?>
                    </p>

                    <div class="flex justify-between items-end mt-auto">
                      <div class="flex flex-col">
                        <span class="text-[#008323] font-extrabold text-[22px] leading-none">$ 205</span>
                        <span class="text-gray-400 text-[10px] mt-1"><?php echo cusco_l10n( 'per person', 'por persona' ); ?></span>
                      </div>
                      <a href="<?php the_permalink(); ?>" class="bg-[#008323] text-white text-[11px] font-bold px-4 py-2 rounded-[5px] hover:bg-[#00691c] transition-colors flex items-center gap-1.5">
                        <?php echo cusco_l10n( 'Learn more', 'Saber más' ); ?>
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
            <?php
              endwhile;
              wp_reset_postdata();
            else :
              echo '<p class="text-gray-500 text-[12px]">' . cusco_l10n( 'No related tours found.', 'No se encontraron tours relacionados.' ) . '</p>';
            endif;
            ?>
          </div>
        </div>
        <button type="button" class="related-tours-prev absolute left-0 top-1/2 z-10 grid h-10 w-10 -translate-y-1/2 place-items-center rounded-full border border-[#008323] bg-white text-[#008323] shadow-[0_4px_12px_rgba(29,40,52,0.12)] transition hover:bg-[#008323] hover:text-white disabled:cursor-not-allowed disabled:opacity-40" aria-label="<?php echo esc_attr( cusco_l10n( 'Previous related tour', 'Tour relacionado anterior' ) ); ?>">
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path>
          </svg>
        </button>
        <button type="button" class="related-tours-next absolute right-0 top-1/2 z-10 grid h-10 w-10 -translate-y-1/2 place-items-center rounded-full border border-[#008323] bg-white text-[#008323] shadow-[0_4px_12px_rgba(29,40,52,0.12)] transition hover:bg-[#008323] hover:text-white disabled:cursor-not-allowed disabled:opacity-40" aria-label="<?php echo esc_attr( cusco_l10n( 'Next related tour', 'Siguiente tour relacionado' ) ); ?>">
          <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path>
          </svg>
        </button>
      </div>

    </div>
  </div>


  <div class="mx-auto relative bg-cover bg-center py-24" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portada.png');">
    <div class="absolute inset-0 bg-[#008323]/85 z-0"></div>

    <div class="relative z-10 container flex flex-col items-center">
      <h2 class="text-white text-[42px] font-extrabold mb-14 tracking-tight">
        <?php echo cusco_l10n( "Experience the heart of Peru with Cusco Travel Service", "Vive el corazón de Perú con Cusco Travel Service" ); ?>
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-3 w-full gap-8">
        <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-lg">
          <div class="w-11 h-11 rounded-full bg-[#ffcc00] flex items-center justify-center text-black mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div class="text-[#ffcc00] text-[34px] font-extrabold leading-none mb-2">12+</div>
          <div class="text-white text-[13px] font-medium tracking-wide"><?php echo cusco_l10n( 'years of experience', 'años de experiencia' ); ?></div>
        </div>

        <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-lg">
          <div class="w-11 h-11 rounded-full bg-[#ffcc00] flex items-center justify-center text-black mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
            </svg>
          </div>
          <div class="text-[#ffcc00] text-[34px] font-extrabold leading-none mb-2">10k+</div>
          <div class="text-white text-[13px] font-medium tracking-wide"><?php echo cusco_l10n( 'happy travelers', 'viajeros felices' ); ?></div>
        </div>

        <div class="flex-1 bg-white/10 backdrop-blur-sm border border-white/20 rounded-2xl p-8 shadow-lg">
          <div class="w-11 h-11 rounded-full bg-[#ffcc00] flex items-center justify-center text-black mb-6">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
          </div>
          <div class="text-[#ffcc00] text-[34px] font-extrabold leading-none mb-2">50+</div>
          <div class="text-white text-[13px] font-medium tracking-wide"><?php echo cusco_l10n( 'tour destinations', 'destinos turísticos' ); ?></div>
        </div>
      </div>
    </div>
  </div>



  <div class="bg-[#F8F9FA] py-16">
    <div class="container">
      <div class="mb-8">
        <div class="flex items-center gap-3 mb-2">
          <div class="w-10 h-[2px] bg-[#008323]"></div>
            <span class="text-[#008323] font-bold text-[12px] tracking-widest uppercase"><?php echo cusco_l10n( 'INSPIRATION', 'INSPIRACIÓN' ); ?></span>
        </div>
        <h2 class="text-[#1D2834] text-[32px] font-extrabold uppercase tracking-tight"><?php echo cusco_l10n( 'POPULAR DESTINATIONS', 'DESTINOS POPULARES' ); ?></h2>
      </div>

      <div class="relative grid grid-cols-1 lg:grid-cols-4 gap-6 w-full">
        <div class="w-full h-96 relative rounded-[16px] overflow-hidden group col-span-1 lg:col-span-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cusco.png'); ?>" alt="Cusco Imperial" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-[#1D2834]/80 via-[#1D2834]/10 to-transparent"></div>
          <h3 class="absolute bottom-6 left-8 text-white font-serif text-[32px] tracking-wide z-10">Cusco Imperial</h3>
        </div>

        <div class="w-full  h-96 relative rounded-[16px] overflow-hidden group  col-span-1 lg:col-span-2">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/sacred valley.webp'); ?>" alt="Sacred Valley" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-[#1D2834]/80 via-[#1D2834]/10 to-transparent"></div>
          <h3 class="absolute bottom-6 left-8 text-white font-serif text-[32px] tracking-wide z-10"><?php echo cusco_l10n( 'Sacred Valley', 'Valle Sagrado' ); ?></h3>
        </div>

        <div class="w-full  h-96 relative rounded-[16px] overflow-hidden group col-span-1 lg:col-span-3">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/lago-titicaca.png'); ?>" alt="Lake Titicaca" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-[#1D2834]/80 via-[#1D2834]/10 to-transparent"></div>
          <h3 class="absolute bottom-6 left-8 text-white font-serif text-[32px] tracking-wide z-10"><?php echo cusco_l10n( 'Lake Titicaca', 'Lago Titicaca' ); ?></h3>
        </div>

        <div class="w-full  h-96 relative rounded-[16px] overflow-hidden group col-span-1 lg:col-span-1">
          <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cañon-del-colca.png'); ?>" alt="Colca Canyon" class="absolute inset-0 w-full h-full object-cover">
          <div class="absolute inset-0 bg-gradient-to-t from-[#1D2834]/80 via-[#1D2834]/10 to-transparent"></div>
          <h3 class="absolute bottom-6 left-8 text-white font-serif text-[32px] tracking-wide z-10"><?php echo cusco_l10n( 'Colca Canyon', 'Cañón del Colca' ); ?></h3>
        </div>
      </div>
    </div>
  </div>



  <div class="mx-auto relative bg-cover bg-center py-32" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/portada.png');">
    <div class="absolute inset-0 bg-[#1D2834]/85 z-0"></div>

    <div class="relative z-10 container lg:px-12 flex flex-col items-center justify-center text-center">
      <h2 class="text-white text-[56px] font-extrabold mb-4 tracking-tight">
        <?php echo cusco_l10n( 'Start Your Adventure Today', 'Comienza tu aventura hoy' ); ?>
      </h2>

      <p class="text-white text-[19px] max-w-[900px] mx-auto mb-10 leading-relaxed text-center">
        <?php echo cusco_l10n( "Join us for a carefully planned expedition through Cusco's rich historic wonders and the ancient cloud citadels of the Incas.", 'Acompáñanos en una expedición cuidadosamente planificada a través de las ricas maravillas históricas de Cusco y las antiguas ciudadelas incas entre las nubes.' ); ?>
      </p>

      <a href="#" class="bg-[#ffcc00] text-black font-extrabold text-[14px] px-10 py-4 rounded-[3px] uppercase tracking-wider hover:bg-yellow-500 transition-colors">
        <?php echo cusco_l10n( 'PLAN YOUR CUSTOM TOUR', 'PLANIFICA TU TOUR PERSONALIZADO' ); ?>
      </a>
    </div>
  </div>

</section>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper === 'undefined' || !document.querySelector('.related-tours-swiper')) {
      return;
    }

    new Swiper('.related-tours-swiper', {
      slidesPerView: 1,
      spaceBetween: 20,
      navigation: {
        nextEl: '.related-tours-next',
        prevEl: '.related-tours-prev'
      },
      breakpoints: {
        640: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 4
        }
      }
    });
  });
</script>

<?php
get_footer();
