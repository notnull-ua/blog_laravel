const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    mix.sass([
        'app.scss',
        './vendor/twbs/bootstrap/scss/bootstrap.scss',


    ])
        .webpack([
            'app.js'
        ])
        .styles([
            './bower_components/glyphicons/styles/glyphicons.css'
        ])
        .copy('./bower_components/glyphicons/fonts','public/fonts')
});
