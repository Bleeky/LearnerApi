var elixir = require('laravel-elixir');
var gulp = require("gulp");

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
var paths = {
    'bootstrap': './node_modules/bootstrap-sass/assets/',
    'font_awesome': './node_modules/font-awesome/',
    'jquery': './node_modules/jquery/dist/'
}

elixir(function(mix) {
    mix.sass(['app.scss', 'bootstrap.scss', 'font-awesome.scss'], 'public/css/', {includePaths: [paths.bootstrap + 'stylesheets/', paths.font_awesome + 'scss/']})
        .copy(paths.font_awesome + 'fonts', "./public/fonts/")
        .copy(paths.bootstrap + 'fonts', "./public/fonts/")
        .copy(paths.jquery + "jquery.min.map", "./public/js/jquery.min.map")
        .styles(['bootstrap.css', 'font-awesome.css'], 'public/css/dependencies.css', 'public/css')
        .scripts('bootbox.min.js', 'public/js/bootbox.min.js', 'resources/assets/javascripts')
        .scripts('learner.js', 'public/js/learner.min.js', 'resources/assets/javascripts')
        .scripts(
        [
            'jquery/dist/jquery.js',
            'bootstrap-sass/assets/javascripts/bootstrap.js'
        ],
        'public/js/dependencies.min.js',
        'node_modules'
    )
});
