<?php


use App\Http\Controllers\BasketsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductTypesController;
use App\Http\Controllers\ProdUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');






// GET Requests
Route::get('/user', [ProdUserController::class, 'index']);
Route::get('/user/{id}', [ProdUserController::class, 'show']);
Route::get('/baskets', [BasketsController::class, 'index']);
Route::get('/basket/{id}', [BasketsController::class, 'show']);
Route::get('/products', [ProductsController::class, 'index']);
Route::get('/product/{id}', [ProductsController::class, 'show']);
Route::get('/producttypes', [ProductTypesController::class, 'index']);
Route::get('/producttype/{id}', [ProductTypesController::class, 'show']);

// POST Requests
Route::post('/user', [ProdUserController::class, 'store']);
Route::post('/basket', [BasketsController::class, 'store']);
Route::post('/product', [ProductsController::class, 'store']);
Route::post('/producttype', [ProductTypesController::class, 'store']);

// PUT Requests (for updating)
Route::put('/user/{id}', [ProdUserController::class, 'update']);
Route::put('/basket/{id}', [BasketsController::class, 'update']);
Route::put('/product/{id}', [ProductsController::class, 'update']);
Route::put('/producttype/{id}', [ProductTypesController::class, 'update']);

// DELETE Requests
Route::delete('/user/{id}', [ProdUserController::class, 'destroy']);
Route::delete('/basket/{id}', [BasketsController::class, 'destroy']);
Route::delete('/product/{id}', [ProductsController::class, 'destroy']);
Route::delete('/producttype/{id}', [ProductTypesController::class, 'destroy']);
