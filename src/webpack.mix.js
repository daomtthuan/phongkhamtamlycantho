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

if (mix.inProduction()) {
  mix.version();
}

mix.js('resources/scripts/app.js', 'public/scripts');
mix.sass('resources/styles/app.scss', 'public/styles');
