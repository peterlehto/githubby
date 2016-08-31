var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    mix.sass('app.scss', 'resources/assets/css');

    mix.styles([
        'libs/semantic.min.css',
        'app.css'
    ]);

    mix.scripts([
        'libs/jquery.js',
        'libs/semantic.min.js'
    ]);

    mix.version(['public/css/all.css', 'public/js/all.js']);

});
