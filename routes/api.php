<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\JsonController;


Route::apiResource('hello', HelloWorldController::class);
Route::get('/json', [JsonController::class, 'index']);
Route::post('/json', [JsonController::class, 'store']);
Route::get('/json/{id}', [JsonController::class, 'show']);
Route::put('/json/{id}', [JsonController::class, 'update']);
Route::delete('/json/{id}', [JsonController::class, 'destroy']);
