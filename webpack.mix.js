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

mix
    //site
    .sass('resources/css/app.scss', 'public/assets/css/app-geral.css')
    .styles(
        [
            'resources/views/pages/site/assets/vendor/bootstrap/css/bootstrap.min.css',
            'resources/views/pages/site/assets/vendor/icofont/icofont.min.css',
            'resources/views/pages/site/assets/vendor/boxicons/css/boxicons.min.css',
            'resources/views/pages/site/assets/vendor/venobox/venobox.css',
            'resources/views/pages/site/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
            'resources/views/pages/site/assets/vendor/aos/aos.css',
        ], 'public/assets/site/css/libs.css')
    .styles('resources/views/pages/site/assets/css/style.css', 'public/assets/site/css/style.css')
    .scripts(
        [
            'resources/views/pages/site/assets/vendor/jquery/jquery.min.js',
            'resources/views/pages/site/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
            'resources/views/pages/site/assets/vendor/jquery.easing/jquery.easing.min.js',
            'resources/views/pages/site/assets/vendor/php-email-form/validate.js',
            'resources/views/pages/site/assets/vendor/waypoints/jquery.waypoints.min.js',
            'resources/views/pages/site/assets/vendor/counterup/counterup.min.js',
            'resources/views/pages/site/assets/vendor/isotope-layout/isotope.pkgd.min.js',
            'resources/views/pages/site/assets/vendor/venobox/venobox.min.js',
            'resources/views/pages/site/assets/vendor/owl.carousel/owl.carousel.min.js',
            'resources/views/pages/site/assets/vendor/typed.js/typed.min.js',
            'resources/views/pages/site/assets/vendor/aos/aos.js',
        ],'public/assets/site/js/libs.js')
    .scripts('resources/views/pages/site/assets/js/main.js', 'public/assets/site/js/main.js')
    .scripts('resources/views/pages/site/assets/js/custom.js', 'public/assets/site/js/custom.js')
    .copyDirectory('resources/views/pages/site/assets/img', 'public/assets/site/img')
    .copyDirectory('resources/views/pages/site/assets/fonts', 'public/assets/site/fonts')

//blog

    .styles(
        [
            'resources/views/pages/blog/assets/vendor/bootstrap/css/bootstrap.min.css',
            'resources/views/pages/blog/assets/vendor/icofont/icofont.min.css',
            'resources/views/pages/blog/assets/vendor/boxicons/css/boxicons.min.css',
            'resources/views/pages/blog/assets/vendor/venobox/venobox.css',
            'resources/views/pages/blog/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
            'resources/views/pages/blog/assets/vendor/aos/aos.css',
        ], 'public/assets/blog/css/libs.css')
    .styles('resources/views/pages/blog/assets/css/style.css', 'public/assets/blog/css/style.css')
    .scripts(
        [
            'resources/views/pages/blog/assets/vendor/jquery/jquery.min.js',
            'resources/views/pages/blog/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
            'resources/views/pages/blog/assets/vendor/jquery.easing/jquery.easing.min.js',
            'resources/views/pages/blog/assets/vendor/php-email-form/validate.js',
            'resources/views/pages/blog/assets/vendor/waypoints/jquery.waypoints.min.js',
            'resources/views/pages/blog/assets/vendor/counterup/counterup.min.js',
            'resources/views/pages/blog/assets/vendor/isotope-layout/isotope.pkgd.min.js',
            'resources/views/pages/blog/assets/vendor/venobox/venobox.min.js',
            'resources/views/pages/blog/assets/vendor/owl.carousel/owl.carousel.min.js',
            'resources/views/pages/blog/assets/vendor/typed.js/typed.min.js',
            'resources/views/pages/blog/assets/vendor/aos/aos.js',
        ],'public/assets/blog/js/libs.js')
    .scripts('resources/views/pages/blog/assets/js/main.js', 'public/assets/blog/js/main.js')
    .scripts('resources/views/pages/blog/assets/js/custom.js', 'public/assets/blog/js/custom.js')
    .copyDirectory('resources/views/pages/blog/assets/img', 'public/assets/blog/img')
    .copyDirectory('resources/views/pages/blog/assets/fonts', 'public/assets/blog/fonts')


    // login - auth

    .styles(
    [
        'resources/views/auth/front/vendor/bootstrap/css/bootstrap.css',
        'resources/views/auth/front/vendor/animate/animate.css',
        'resources/views/auth/front/vendor/css-hamburgers/hamburgers.css',
        'resources/views/auth/front/vendor/select2/select2.css',
    ], 'public/assets/auth/css/libs.css')
    .styles('resources/views/auth/front/css/util.css', 'public/assets/auth/css/util.css')
    .styles('resources/views/auth/front/css/main.css', 'public/assets/auth/css/main.css')
    .scripts(
        [
            'resources/views/auth/front/vendor/jquery/jquery-3.2.1.min.js',
            'resources/views/auth/front/vendor/bootstrap/js/popper.js',
            'resources/views/auth/front/vendor/bootstrap/js/bootstrap.js',
            'resources/views/auth/front/vendor/select2/select2.js',
            'resources/views/auth/front/vendor/tilt/tilt.jquery.min.js',
        ],'public/assets/auth/js/libs.js')
    .scripts('resources/views/auth/front/js/main.js', 'public/assets/auth/js/main.js')

    .copyDirectory('resources/views/auth/front/images', 'public/assets/auth/images')
    .copyDirectory('resources/views/auth/front/fonts', 'public/assets/auth/fonts')


    //painel - admin
    .scripts('node_modules/filepond/dist/filepond.js', 'public/assets/painel/js/filepond.js')

    .scripts('node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js', 'public/assets/painel/js/filepond-plugin-image-preview.js')
    .scripts('node_modules/@ckeditor/ckeditor5-build-classic/build/ckeditor.js', 'public/assets/painel/js/ckeditor.js')
    .styles('node_modules/filepond/dist/filepond.css', 'public/assets/painel/css/filepond.css')
    .styles('node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css', 'public/assets/painel/css/filepond-plugin-image-preview.css');
