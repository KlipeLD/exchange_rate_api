<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CurrencyController;
use App\Http\Resources\CurrencyResource;
use App\Models\Currency;

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

Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::group(['middleware' => ['can:watch-current-currencies']], function () {
        Route::get('/currency', 'App\Http\Controllers\Api\CurrencyController@index');
    });
    Route::group(['middleware' => ['can:add-currencies']], function () {
        Route::post('/currency', 'App\Http\Controllers\Api\CurrencyController@store');
    });
});

