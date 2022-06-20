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
const mix = require('laravel-mix');
/* Add this line to the top if you do not have this: */
const tailwindcss = require('tailwindcss');
 
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss")
    ])
    /* Add the next three lines: */
    .postCss('resources/css/mail.css', 'public/css', [
        tailwindcss('tailwind-mail.config.js')
    ])
    .version();