# Cusco Travel Service

Tema de WordPress para **Cusco Travel Service**, agencia de turismo especializada en tours y paquetes por Cusco y alrededores. Basado en el starter theme [_s (underscores)](https://underscores.me/) y estilado con [Tailwind CSS](https://tailwindcss.com/).

## Características

- Diseño responsive construido con Tailwind CSS.
- Custom Post Type de **Tours** (`inc/post-types.php`, `single-tour.php`) para publicar paquetes turísticos.
- Formulario de reserva/booking integrado (`inc/booking-form.php`).
- Menús de navegación personalizados, incluyendo versión mobile (`inc/class-cusco-walker-nav-menu.php`, `inc/class-cusco-walker-mobile-nav-menu.php`).
- Soporte para custom header, customizer y Jetpack.
- Listo para traducción (`languages/`).

## Requisitos

- WordPress
- [Node.js](https://nodejs.org/) (para compilar los estilos con Tailwind)
- [Composer](https://getcomposer.org/) (opcional, para linting de PHP)
- PHP >= 5.6

## Instalación

1. Clona o copia esta carpeta dentro de `wp-content/themes/`.
2. Instala las dependencias:

   ```sh
   npm install
   ```

3. Activa el tema **cusco** desde el panel de administración de WordPress.

## Desarrollo

Compilar los estilos de Tailwind en modo watch:

```sh
npm run dev
```

Generar el build de producción (minificado):

```sh
npm run build
```

Otros comandos disponibles (heredados de `_s`):

- `npm run lint:js` : valida los archivos JS contra los estándares de WordPress.
- `npm run bundle` : genera un `.zip` del tema listo para distribuir.
- `composer lint:php` : valida sintaxis PHP.
- `composer lint:wpcs` : valida PHP contra los estándares de código de WordPress.

## Estructura principal

```
cusco/
├── inc/                  # Custom post types, walkers, customizer, booking form, etc.
├── template-parts/       # Partials reutilizables de contenido
├── src/                  # Fuente de estilos (Tailwind input.css)
├── js/                   # Scripts del tema
├── style.css             # Salida compilada de Tailwind (hoja principal del tema)
├── single-tour.php       # Template de detalle de tour
├── front-page.php        # Página de inicio
└── functions.php         # Setup del tema
```

## Licencia

GNU General Public License v2 o posterior. Ver [LICENSE](LICENSE).
