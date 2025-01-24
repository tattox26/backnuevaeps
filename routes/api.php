<?php

use Illuminate\Http\Request;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/contratos', 'App\Http\Controllers\ContratoController@store');//->name('contratos');
Route::get('/contratos', 'App\Http\Controllers\ContratoController@index');//->name('contratos');
//Route::post('/contratos', [ContratoController::class, 'store']);
//Route::get('/contratos', [ContratoController::class, 'index']);