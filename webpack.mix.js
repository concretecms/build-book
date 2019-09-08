let mix = require('laravel-mix');
mix.setPublicPath('public')
    .sass('public/packages/dreamrs/themes/theme_dreamrs/sass/style.scss', 
        'public/packages/dreamrs/themes/theme_dreamrs/css/style.css');
