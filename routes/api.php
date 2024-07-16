<?php

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

Route::get('/products',[\App\Http\Controllers\ProductController::class, 'index']);
Route::get('/addProduct',[\App\Http\Controllers\ProductController::class, 'create']);
Route::post('/submitProduct',[\App\Http\Controllers\ProductController::class, 'store']);
Route::get('/editProduct/{id}',[\App\Http\Controllers\ProductController::class, 'edit']);
Route::get('/deleteProduct/{id}',[\App\Http\Controllers\ProductController::class, 'destroy']);
Route::post('/updateProduct',[\App\Http\Controllers\ProductController::class, 'update']);

Route::get('/clients',[\App\Http\Controllers\ClientController::class, 'index']);
Route::get('/addClient',[\App\Http\Controllers\ClientController::class, 'create']);
Route::post('/submitClient',[\App\Http\Controllers\ClientController::class, 'store']);
Route::get('/editClient/{id}',[\App\Http\Controllers\ClientController::class, 'edit']);
Route::get('/deleteClient/{id}',[\App\Http\Controllers\ClientController::class, 'deleteClient']);
Route::post('/submitEdit',[\App\Http\Controllers\ClientController::class, 'submitEdit']);


Route::get('/orders',[\App\Http\Controllers\OrderController::class, 'index']);
Route::get('/addOrder/{id}',[\App\Http\Controllers\OrderController::class, 'create']);