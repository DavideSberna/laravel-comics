<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $movies = config('comics.movies');
    $nav = config('comics.nav');
    $footer = config('comics.footer');
    $listInfo = config('comics.listInfo');
    $footerIcon = config('comics.footerIcon');

    return view('home', compact('nav', 'movies', 'footer', 'listInfo', 'footerIcon'));
});

