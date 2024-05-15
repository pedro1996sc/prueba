<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\PurchaseController;

Route::get('/event', [EventController::class, 'showfull']);
Route::get('/event/activo', [EventController::class, 'show']);
Route::post('/event', [EventController::class, 'create']);
Route::post('/purchase', [PurchaseController::class, 'create']);
Route::get('/purchase/{id}',[PurchaseController::class, 'showclient']);
Route::get('/purchase', [PurchaseController::class, 'show']);





