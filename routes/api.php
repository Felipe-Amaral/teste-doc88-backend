<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('customer', CustomerController::class, ['except' => ['create', 'edit']]);
Route::resource('product', ProductController::class, ['except' => ['create', 'edit']]);
// Route::resource('order', OrderController::class, ['except' => ['create', 'edit']]);
