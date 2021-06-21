const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

/*
 |--------------------------------------------------------------------------
 | ASSETS
 |--------------------------------------------------------------------------
 */
mix.copyDirectory('resources/assets/images', 'public/images');

/*
 |--------------------------------------------------------------------------
 | SCRIPTS
 |--------------------------------------------------------------------------
 */

/**
 * ESSENTIAL
 */
mix.scripts([
    'resources/js/template/scripts.bundle.js',
    'resources/js/template/plugins.bundle.js',
], 'public/js/essential.js').version();

/**
 * AUTH
 */
mix.styles([
    'resources/js/auth/login.js',
], 'public/js/auth/login.js').version();

mix.styles([
    'resources/js/auth/forgot-password.js',
], 'public/js/auth/forgot-password.js').version();

mix.styles([
    'resources/js/auth/reset-password.js',
], 'public/js/auth/reset-password.js').version();

/*
 |--------------------------------------------------------------------------
 | STYLES
 |--------------------------------------------------------------------------
 */

/**
 * ESSENTIAL
 */
mix.styles([
    'resources/css/template/style.bundle.css',
    'resources/css/template/plugins.bundle.css',
], 'public/css/essential.css').version();
