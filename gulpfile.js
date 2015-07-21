var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {

    mix.copy('vendor/bower_components/bootstrap/dist', 'resources/assets');
    mix.copy('vendor/bower_components/bootstrap/fonts', 'public/fonts');


    mix.copy('vendor/bower_components/jquery/dist/jquery.js', 'resources/assets/js');


    mix.scripts([
        "jquery.js",
        "bootstrap.js",
    ]);

    mix.styles([
        "bootstrap.css",
        "style.css"
    ]);
});