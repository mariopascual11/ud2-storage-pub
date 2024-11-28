<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\CsvController;


Route::apiResource('hello', HelloWorldController::class);
Route::get('/json', [JsonController::class, 'index']);
Route::post('/json', [JsonController::class, 'store']);
Route::get('/json/{id}', [JsonController::class, 'show']);
Route::put('/json/{id}', [JsonController::class, 'update']);
Route::delete('/json/{id}', [JsonController::class, 'destroy']);
Route::get('/csv', [CsvController::class, 'index']);
Route::get('/csv/{id}', [CsvController::class, 'show']);
Route::post('/csv', [CsvController::class, 'store']);
Route::put('/csv/{id}', [CsvController::class, 'update']);
Route::delete('/csv/{id}', [CsvController::class, 'destroy']);