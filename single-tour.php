<?php

/**
 * The template for displaying a single Tour.
 *
 * Used automatically for the "tour" custom post type.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package cusco
 */

get_header();
?>

<div class="relative w-full h-[500px] sm:h-[650px] lg:h-[550px] overflow-hidden bg-center bg-no-repeat bg-cover shadow-md" style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'full')); ?>');">
  <div class="absolute inset-0 bg-gradient-to-t from-[#1D2834]/90 via-[#1D2834]/20 to-transparent"></div>

  <div class="absolute bottom-0 left-0 right-0 pb-12 font-sans">
    <?php
    $seccion_2 = get_field('detalles_del_tour');
    $details = isset($seccion_2['detalles']) && is_array($seccion_2['detalles']) ? $seccion_2['detalles'] : [];
    $precio_tour = isset($seccion_2) ? $seccion_2["precio"] : "";

    foreach ($details as $item) {
      $tipo = isset($item['seleccionar']) ? strtolower((string) $item['seleccionar']) : '';
    }
    ?>

    <div class="container mx-auto px-4 sm:px-6 flex flex-col gap-6 lg:flex-row lg:justify-between lg:items-end">
      <div class="w-full lg:w-1/2">
        <h1 class="text-white text-[32px] sm:text-[38px] lg:text-[42px] font-extrabold uppercase leading-[1.1] tracking-tight break-words">
          <?php the_title(); ?>
        </h1>
        <div class="w-16 h-[4px] bg-[#ffcc00] mt-5"></div>
        
        <?php if (!empty($precio_tour)) : ?>
          <div class="inline-flex max-w-full flex-wrap items-baseline gap-x-3 gap-y-1 bg-[#1D2834]/75 px-4 sm:px-5 py-3 backdrop-blur-sm border border-white/15 rounded-[12px] mt-6 sm:mt-8">
            <span class="text-[11px] text-gray-200"><?php echo cusco_l10n( 'From', 'Desde' ); ?></span>
            <span class="text-[26px] sm:text-[30px] font-extrabold leading-none text-[#ffcc00]"><?php echo esc_html($precio_tour); ?></span>
            <span class="text-[11px] text-gray-200"><?php echo cusco_l10n( 'per person', 'por persona' ); ?></span>
          </div>
        <?php endif; ?>
      </div>

      <div class="grid grid-cols-2 md:grid-cols-4 lg:gap-x-7 gap-y-4 bg-[#1D2834]/60 backdrop-blur-md border border-white/15 rounded-[12px] px-4 sm:px-6 py-4 lg:px-8">
        <?php
        if (!empty($details)) : ?>
          <?php foreach ($details as $item) :
            $tipo  = $item['seleccionar'];
            $valor = $item['text'];

            if (in_array(strtolower((string) $tipo), ['price', 'precio'], true)) {
              continue;
            }

            $titulo = '';
            $svg = '';

            switch ($tipo) {
              case 'type_tour':
                $titulo = cusco_l10n( 'Tour Type', 'Tipo de Tour' );
                $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 lucide lucide-mountain-snow-icon lucide-mountain-snow"><path d="m8 3 4 8 5-5 5 15H2L8 3z"/><path d="M4.14 15.08c2.62-1.57 5.24-1.43 7.86.42 2.74 1.94 5.49 2 8.23.19"/></svg>';
                break;
              case 'difficulty':
                $titulo = cusco_l10n( 'DIFFICULTY', 'DIFICULTAD' );
                $svg = '<svg class="w-5 h-5 text-[#ffcc00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                  </svg>';
                break;
              case 'group':
                $titulo = cusco_l10n( 'PASSENGER', 'PASAJEROS' );
                $svg = '<svg class="w-5 h-5 text-[#ffcc00]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                  </svg>';
                break;
              case 'duration':
                $titulo = cusco_l10n( 'DURATION', 'DURACIÓN' );
                $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-5 h-5 lucide lucide-clock3-icon lucide-clock-3"><circle cx="12" cy="12" r="10"/><path d="M12 6v6h4"/></svg>';
                break;
              default:
                $titulo = cusco_l10n( 'INFO', 'INFO' );
                $svg = '';
                break;
            }
          ?>
            <div class="min-w-0 flex items-center gap-2 sm:gap-3 text-[#ffcc00] border-0 md:border-r md:border-white/20 pr-2 sm:pr-4 last:border-r-0">
              <div>
                <?php echo $svg; ?>
              </div>
              <div>
                <div class="text-white text-[11px] font-bold"><?php echo esc_html($titulo); ?></div>
                <div class="text-gray-300 text-[10px] break-words"><?php echo esc_html($valor); ?></div>
              </div>
            </div>
          <?php endforeach; ?>

        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
<div class="w-full  border-b border-slate-200">
  <div class="container">
  <?php
        if (function_exists('yoast_breadcrumb')) {
          }
          yoast_breadcrumb('<span id="breadcrumb" class="text-gray-500 text-xs my-3 block">', '</span>');
        ?>

</div>

</div>
<div class="container mx-auto mt-6 pb-16 font-sans">
  <div class="grid grid-cols-1 lg:grid-cols-[minmax(0,1fr)_minmax(280px,35%)] gap-6 items-start">

    <div class="min-w-0 w-full">
      <div class="prose max-w-none text-gray-700 text-[15px] leading-relaxed mb-10">
        <?php
        while (have_posts()) : the_post();
          the_content();
        endwhile;
        ?>
      </div>
    </div>

    <div class="w-full lg:sticky lg:top-6">
      <div id="book" class="tour-booking-form bg-white rounded-[16px] border border-gray-200 p-7 shadow-[0_4px_20px_rgba(0,0,0,0.06)]">
        <h3 class="tbf-title"><?php echo cusco_l10n( 'Book Now', 'Reserva Ahora' ); ?></h3>
        <div class="tbf-rule"></div>
        <?php echo do_shortcode('[contact-form-7 id="c310078" title="Contact Tours"]'); ?>
      </div>
    </div>

  </div>
  <div class="tour-booking-form bg-white rounded-[16px] my-16">
    <div class="flex flex-col gap-4 sm:flex-row sm:justify-between sm:items-end mb-8">
      <div>
        <div class="flex items-center gap-2 mb-1">
          <div class="w-8 h-[2px] bg-[#008323]"></div>
          <span class="text-[#008323] font-bold text-[10px] tracking-widest uppercase"><?php echo cusco_l10n( 'REVIEWS', 'RESEÑAS' ); ?></span>
        </div>
        <h2 class="text-[#1D2834] text-[22px] sm:text-[26px] font-extrabold uppercase tracking-tight break-words"><?php echo cusco_l10n( 'OUR TESTIMONIALS', 'NUESTROS TESTIMONIOS' ); ?></h2>
      </div>
      <a href="#" class="self-start sm:self-auto border border-[#008323] text-[#008323] font-bold text-[11px] px-4 sm:px-6 py-2.5 hover:bg-[#008323] hover:text-white transition-colors">
        <?php echo cusco_l10n( 'SEE ALL REVIEWS', 'VER TODAS LAS RESEÑAS' ); ?>
      </a>
    </div>
    <div class="swiper tour-reviews-swiper my-16">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">IB</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Isabel B.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '7 months ago', 'Hace 7 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'The best trip of my life. The 4-day Inca Trail with Salka was flawless: food, tents and a guide who knows every stone.', 'La mejor excursión de mi vida. El Camino Inca de 4 días con Salka fue impecable: comida, carpas y un guía que conoce cada piedra.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">MR</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Mateo R.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '2 months ago', 'Hace 2 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'We booked the one-day Machu Picchu tour and everything went perfectly. Punctual, great service and a guide who really knows Inca history.', 'Reservamos el tour a Machu Picchu de un día y todo salió perfecto. Puntualidad, buen trato y un guía súper preparado en historia inca.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">CV</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Camila V.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '1 month ago', 'Hace 1 mes' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( "The Rainbow Mountain exceeded my expectations. Salka's team provided support horses and coca leaves for the altitude, very attentive the whole way.", 'La Montaña de 7 Colores superó mis expectativas. El equipo de Salka nos dio caballos de apoyo y coca para la altura, muy atentos todo el trayecto.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">DT</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Diego T.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '5 months ago', 'Hace 5 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★☆</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( "Very well organized trip to the Sacred Valley. I'd only recommend leaving a bit earlier to avoid traffic in Pisac, but the guide was excellent.", 'Muy buena organización en el Valle Sagrado. Solo recomendaría salir un poco más temprano para evitar el tráfico en Pisac, pero el guía fue excelente.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">LF</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Lucia F.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '3 weeks ago', 'Hace 3 semanas' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'I traveled solo and felt very safe the whole time. The Salkantay trek was an unforgettable experience, spectacular landscapes and delicious food in camp.', 'Viajé sola y me sentí muy segura todo el tiempo. El trekking a Salkantay fue una experiencia inolvidable, paisajes espectaculares y comida deliciosa en carpa.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">JP</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Javier P.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '8 months ago', 'Hace 8 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'We booked the Humantay tour with Salka and the service was top-notch from the reservation to the return to the hotel. Highly recommended.', 'Contratamos el tour de Humantay con Salka y la atención fue de primera desde la reserva hasta el regreso al hotel. Totalmente recomendado.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">NS</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Natalia S.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '4 months ago', 'Hace 4 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( "Excellent value for money. We went with our family to the Sacred Valley and the guide adapted to the kids' pace without any problem.", 'Excelente relación calidad-precio. Fuimos en familia al Valle Sagrado y el guía se adaptó al ritmo de los niños sin problema.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">AG</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Andres G.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '6 months ago', 'Hace 6 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'The short 2-day Inca Trail was exactly what I was looking for: less demanding but just as impressive when arriving at the Sun Gate.', 'El Camino Inca corto de 2 días fue justo lo que buscaba: menos exigente pero igual de impresionante al llegar a la Puerta del Sol.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">VC</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Valentina C.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '2 weeks ago', 'Hace 2 semanas' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'They helped us put together a personalized 5-day itinerary combining Cusco, the Sacred Valley and Machu Picchu. Fast communication via WhatsApp the whole time.', 'Nos ayudaron a armar un itinerario personalizado de 5 días combinando Cusco, Valle Sagrado y Machu Picchu. Comunicación rápida por WhatsApp en todo momento.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

        <div class="swiper-slide">
          <article class="rounded-lg border border-slate-200 bg-white p-4">
            <div class="flex items-center gap-2">
              <span class="grid h-8 w-8 place-items-center rounded-full bg-orange text-[11px] font-bold text-white">ER</span>
              <span>
                <span class="block text-[12px] font-semibold text-navy">Emilio R.</span>
                <span class="block text-[10px] text-slate-400"><?php echo cusco_l10n( '9 months ago', 'Hace 9 meses' ); ?></span>
              </span>
            </div>
            <div class="mt-3 text-[10px] text-[#00aa6c]">★★★★★</div>
            <p class="mt-2 text-[11px] leading-relaxed text-slate-500"><?php echo cusco_l10n( 'Second time traveling with Salka Travel Peru, this time to Choquequirao. Professional staff, camping gear in great condition and excellent bilingual guides.', 'Segunda vez que viajo con Salka Travel Peru, esta vez a Choquequirao. Gente profesional, equipo de campamento en buen estado y guías bilingües excelentes.' ); ?></p>
            <a href="#" class="mt-3 inline-block text-[10px] font-semibold text-slate-400 underline"><?php echo cusco_l10n( 'Read more', 'Leer más' ); ?></a>
          </article>
        </div>

      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
  <div class="bg-white py-12 font-sans">
    <div class="container mx-auto ">
      <div class="flex justify-between items-end mb-8">
        <div>
          <div class="flex items-center gap-2 mb-1">
            <div class="w-8 h-[2px] bg-[#008323]"></div>
            <span class="text-[#008323] font-bold text-[10px] tracking-widest uppercase"><?php echo cusco_l10n( 'RELATED TOURS', 'TOURS RELACIONADOS' ); ?></span>
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
            $current_tour_id = get_the_ID();
            $current_cats    = get_the_category( $current_tour_id );
            $current_cat     = !empty( $current_cats ) ? $current_cats[0]->slug : '';

            $args = array(
              'post_type'      => 'tour',
              'posts_per_page' => 8,
              'orderby'        => 'date',
              'order'          => 'DESC',
              'post__not_in'   => array( $current_tour_id ),
            );

            if ( $current_cat ) {
              $args['category_name'] = $current_cat;
            }

            $query_posts = new WP_Query( $args );

            // No other tour in the same category? Fall back to any other tour.
            if ( ! $query_posts->have_posts() && $current_cat ) {
              $query_posts = new WP_Query( array(
                'post_type'      => 'tour',
                'posts_per_page' => 8,
                'orderby'        => 'date',
                'order'          => 'DESC',
                'post__not_in'   => array( $current_tour_id ),
              ) );
            }

            if ($query_posts->have_posts()) :
              while ($query_posts->have_posts()) : $query_posts->the_post();
                $img_url = has_post_thumbnail()
                  ? get_the_post_thumbnail_url(get_the_ID(), 'medium_large')
                  : 'https://images.unsplash.com/photo-1531065208531-4036c0dba3ca?auto=format&fit=crop&w=800&q=80';

                // Pull this tour's own price/duration/difficulty/group data (same ACF fields used above).
                $rel_seccion = get_field('detalles_del_tour');
                $rel_precio  = isset($rel_seccion['precio']) ? $rel_seccion['precio'] : '';
                $rel_details = isset($rel_seccion['detalles']) && is_array($rel_seccion['detalles']) ? $rel_seccion['detalles'] : [];

                $rel_meta = array();
                foreach ($rel_details as $item) {
                  $tipo = isset($item['seleccionar']) ? strtolower((string) $item['seleccionar']) : '';
                  if (in_array($tipo, array('duration', 'difficulty', 'group'), true) && !empty($item['text'])) {
                    $rel_meta[$tipo] = $item['text'];
                  }
                }
            ?>
                <div class="swiper-slide !h-auto">
                  <div class="h-full rounded-[12px] border border-gray-200 bg-white p-3.5 shadow-sm flex flex-col">
                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-[170px] object-cover rounded-[8px] mb-4">
                    <h3 class="font-bold text-[#1D2834] text-base leading-snug mb-3"><?php the_title(); ?></h3>

                    <?php if ( !empty($rel_meta) ) : ?>
                    <div class="flex items-center gap-3 text-gray-500 text-[10px] font-semibold mb-3">
                      <?php if ( !empty($rel_meta['duration']) ) : ?>
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <?php echo esc_html( $rel_meta['duration'] ); ?>
                      </div>
                      <?php endif; ?>
                      <?php if ( !empty($rel_meta['difficulty']) ) : ?>
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></path>
                        </svg>
                        <?php echo esc_html( $rel_meta['difficulty'] ); ?>
                      </div>
                      <?php endif; ?>
                      <?php if ( !empty($rel_meta['group']) ) : ?>
                      <div class="flex items-center gap-1">
                        <svg class="w-3.5 h-3.5 text-[#008323]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        <?php echo esc_html( $rel_meta['group'] ); ?>
                      </div>
                      <?php endif; ?>
                    </div>
                    <?php endif; ?>

                    <p class="text-gray-400 text-sm leading-relaxed mb-5 flex-grow">
                      <?php echo wp_trim_words(get_the_excerpt(), 10, '...'); ?>
                    </p>

                    <div class="flex justify-between items-end mt-auto">
                      <div class="flex flex-col">
                        <?php if ( !empty($rel_precio) ) : ?>
                          <span class="text-[#008323] font-extrabold text-[22px] leading-none"><?php echo esc_html($rel_precio); ?></span>
                          <span class="text-gray-400 text-[10px] mt-1"><?php echo cusco_l10n( 'per person', 'por persona' ); ?></span>
                        <?php else : ?>
                          <span class="text-[#008323] font-extrabold text-[13px] leading-none"><?php echo cusco_l10n( 'Contact for price', 'Consultar precio' ); ?></span>
                        <?php endif; ?>
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
</div>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    if (typeof Swiper === 'undefined') {
      return;
    }

    new Swiper('.tour-reviews-swiper', {
      slidesPerView: 1,
      spaceBetween: 16,
      loop: true,
      grabCursor: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false
      },
      pagination: {
        el: '.tour-reviews-swiper .swiper-pagination',
        clickable: true
      },
      breakpoints: {
        640: {
          slidesPerView: 2
        },
        1024: {
          slidesPerView: 3
        }
      }
    });

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

<?php $whatsapp_message = sprintf( cusco_l10n( 'Hi, I would like information about the tour: %s', 'Hola, quisiera información sobre el tour: %s' ), get_the_title() ); ?>
<a
  href="https://wa.me/51940897605?text=<?php echo rawurlencode($whatsapp_message); ?>"
  target="_blank"
  rel="noopener noreferrer"
  aria-label="<?php echo esc_attr( cusco_l10n( 'Chat with us on WhatsApp', 'Escríbenos por WhatsApp' ) ); ?>"
  class="fixed bottom-4 right-4 z-50 grid h-14 w-14 place-items-center rounded-full bg-[#25D366] text-white shadow-[0_6px_20px_rgba(37,211,102,0.35)] transition duration-200 hover:scale-105 hover:bg-[#1ebe5d] focus:outline-none focus:ring-4 focus:ring-[#25D366]/40 sm:bottom-7 sm:right-7"
>
  <svg class="h-7 w-7" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M20.52 3.48A11.86 11.86 0 0 0 12.08 0C5.52 0 .18 5.33.18 11.89c0 2.1.55 4.15 1.6 5.96L.08 24l6.3-1.65a11.9 11.9 0 0 0 5.7 1.45h.01c6.56 0 11.9-5.33 11.9-11.89 0-3.18-1.24-6.16-3.47-8.43ZM12.09 21.8h-.01a9.88 9.88 0 0 1-5.03-1.38l-.36-.21-3.74.98 1-3.65-.23-.37a9.85 9.85 0 0 1-1.51-5.28C2.21 6.45 6.64 2.2 12.08 2.2c2.64 0 5.12 1.03 6.99 2.9a9.83 9.83 0 0 1 2.91 7c0 5.44-4.43 9.7-9.89 9.7Zm5.42-7.27c-.3-.15-1.76-.87-2.03-.97-.27-.1-.47-.15-.67.15-.2.3-.77.97-.94 1.17-.17.2-.35.22-.65.07-.3-.15-1.25-.46-2.38-1.47-.88-.78-1.47-1.74-1.64-2.04-.17-.3-.02-.46.13-.61.14-.14.3-.35.45-.52.15-.17.2-.3.3-.5.1-.2.05-.37-.02-.52-.07-.15-.67-1.62-.92-2.22-.24-.58-.49-.5-.67-.51h-.57c-.2 0-.52.07-.79.37-.27.3-1.03 1.01-1.03 2.46s1.06 2.85 1.21 3.05c.15.2 2.08 3.18 5.04 4.46.7.3 1.25.48 1.68.61.71.23 1.36.2 1.87.12.57-.08 1.76-.72 2.01-1.41.25-.69.25-1.28.17-1.41-.07-.12-.27-.2-.57-.35Z" />
  </svg>
</a>



<?php
get_footer();
