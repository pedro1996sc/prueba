<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/user', function () {
    return 'user';
});

Route::get('/event', [EventController::class,"index"]);

Route::get('/events/{id}', function (Request $request) {
    return 'eventos por id';
});

Route::get('/purchases', function (Request $request) {
    return 'compras';
});