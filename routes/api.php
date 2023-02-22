<?php

use App\Http\Controllers\People\DeleteController;
use App\Http\Controllers\People\IndexController;
use App\Http\Controllers\People\StoreController;
use App\Http\Controllers\People\UpdateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'App\Http\Controllers\People'], function () {
    Route::get('/', [IndexController::class, '__invoke']);
    Route::post('/', [StoreController::class, '__invoke']);
    Route::patch('/{person}', [UpdateController::class, '__invoke']);
    Route::delete('/{person}', [DeleteController::class, '__invoke']);
});


