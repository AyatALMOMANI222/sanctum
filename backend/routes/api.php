<?php
use Laravel\Sanctum\Sanctum;



use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Sanctum::routes();
Route::post('login', [AuthController::class,'login']);
Route::post('logout',[AuthController::class,'logout'])->middleware('auth:sanctum');



Route::post('/users', [UserController::class, 'store'])->middleware('auth:sanctum');

