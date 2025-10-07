<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'showShopPage']);
Route::resource('/brand',BrandController::class);