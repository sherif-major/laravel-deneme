<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BirimController;
use App\Http\Controllers\UnvanController;

// API CRUD uç noktaları
Route::apiResource('birimler', BirimController::class)
    ->parameters(['birimler' => 'birimler'])
    ->only(['index', 'store', 'show', 'update', 'destroy']);

Route::apiResource('unvanlar', UnvanController::class)
    ->parameters(['unvanlar' => 'unvanlar'])
    ->only(['index', 'store', 'show', 'update', 'destroy']);