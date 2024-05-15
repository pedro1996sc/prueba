<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\ClienteController;

Route::get('/event', [EventController::class, 'showfull']);
Route::get('/event/{id}', [EventController::class, 'showfilter']);
Route::get('/events', [EventController::class, 'show']);
Route::post('/event', [EventController::class, 'create']);
Route::post('/purchase', [PurchaseController::class, 'create']);
Route::get('/purchase/{id}',[PurchaseController::class, 'showclient']);
Route::get('/purchase', [PurchaseController::class, 'show']);
Route::get('/clientes', [ClienteController::class, 'showfull']);
Route::get('/orders/{id_cliente} ', [PurchaseController::class, 'showclient']);


