<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlatilloController;
use App\Http\Controllers\PedidoController;

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

Route::get('/login',[LoginController::class,'serviceLogin']);
Route::get('/search/{id_restaurant}/platillo', [PlatilloController::class, 'searchInRestaurant']);
Route::post('/create/platillo', [PlatilloController::class, 'create']);
Route::put('/platillo/{id}', [PlatilloController::class, 'update']);
Route::put('/platillo/{id}/{status}', [PlatilloController::class, 'updateStatus']);

Route::get('/pedidos/{id_restaurante}/{status}', [PedidoController::class, 'pedidos']);