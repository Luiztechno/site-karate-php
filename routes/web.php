<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('paginas.about');
});
Route::get('/contato', function () {
    return view('paginas.contato');
});
Route::get('/preco', function () {
    return view('paginas.preco');
});
Route::get('/index', function () {
    return view('paginas.index');
});
Route::get('/', function () {
    return view('paginas.index');
});

