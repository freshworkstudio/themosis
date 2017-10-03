<?php

if (env('ENVIRONMENT') != 'production') {
    flush_rewrite_rules();
}

/**
 * Define your routes and which views to display
 * depending of the query.
 *
 * Based on WordPress conditional tags from the WordPress Codex
 * http://codex.wordpress.org/Conditional_Tags
 *
 */
Route::get('home', 'HomeController@index');
Route::get('404', 'ErrorsController@page404');