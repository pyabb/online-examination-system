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

mix
    //.js('resources/js/admin/user.js', 'public/assets/dist/js/user.bundle.min.js')
    //.js('resources/js/admin/exam.js', 'public/assets/dist/js/exam.bundle.min.js')
    //.js('resources/js/src/default/themeColors.js', 'public/assets/js/themeColors.js')
    //.js('resources/js/src/default/custom.js', 'public/assets/js/custom.js')
    //.js('resources/js/app.js', 'public/js')
    //.js('resources/js/src/default/plugins/sidebar/sidebar.js', 'public/assets/plugins/sidebar/sidebar.js')

    //.js('resources/js/src/default/plugins/sidemenu/sidemenu.js', 'public/assets/plugins/sidemenu/sidemenu.js')

    //.js('resources/js/src/default/plugins/p-scroll/perfect-scrollbar.js', 'public/assets/plugins/p-scroll/perfect-scrollbar.js')
    //.js('resources/js/src/default/plugins/bootstrap/js/popper.js', 'public/assets/plugins/bootstrap/js/popper.min.js')

    /*.postCss('resources/css/src/default/css/sweetalert2.css','public/assets/dist/css/sweetalert2.min.css', [
        require('autoprefixer'),
    ])*/

    /*.postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
        require('autoprefixer'),
    ])*/

    .options({
        terser: {
            extractComments: false,
        },
    });
