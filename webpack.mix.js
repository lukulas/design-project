let mix = require('laravel-mix');

mix.babel([
    'resources/js/plugins/jquery.js',
], 'public/js/plugins/jquery.js').version();

mix.babel([
    'resources/js/order/order.js',
], 'public/js/order/order.js').version();

mix.babel([
    'resources/js/auth/login.js',
], 'public/js/auth/login.js').version();
