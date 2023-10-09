let mix = require('laravel-mix');

mix.babel([
    'resources/js/order/order.js',
], 'public/js/order/order.js').version();
