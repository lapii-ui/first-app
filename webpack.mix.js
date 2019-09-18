const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

mix.js( 'resources/js/desktop/_category.js', 'public/js/desktop/_category.js').options({ processCssUrls: false });
mix.js( 'resources/js/desktop/_table.js', 'public/js/desktop/_table.js').options({ processCssUrls: false });
mix.js( 'resources/js/desktop/_uom.js', 'public/js/desktop/_uom.js').options({ processCssUrls: false });


