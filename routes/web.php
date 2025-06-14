<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::get('/about-us', function () {
    return view('frontend.about-us');
});

// Route::get('/natural-stone', function () {
//     return view('frontend.products.natural-stone');
// });

Route::get('/porcelain-tiles', function () {
    return view('frontend.products.porcelain-tiles');
});

Route::get('/ceramic-tiles', function () {
    return view('frontend.products.ceramic-tiles');
});

Route::get('/indoor-tiles', function () {
    return view('frontend.products.indoor-tiles');
});

Route::get('/outdoor-tiles', function () {
    return view('frontend.products.outdoor-tiles');
});

Route::get('/products', function () {
    return view('frontend.products.products');
});

Route::get('/e-catalogue', function () {
    return view('frontend.e-catalogue');
});

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
});

Route::get('/portfolio', function () {
    return view('frontend.portfolio');
});
