<?php

use App\Http\Controllers\EmployeesController;
use App\Http\Controllers\PostController;
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

Route::get('posts',[PostController::class,'index']); 
Route::post('post',[PostController::class,'store']);
Route::delete('post/{id}', [PostController::class, 'destroy']);

Route::get('employees',[EmployeesController::class,'index']); 
Route::post('employee',[EmployeesController::class,'store']);
Route::get('employee/{id}',[EmployeesController::class,'show']);
Route::put('employee/{id}',[EmployeesController::class,'update']);
Route::delete('employee/{employee}', [EmployeesController::class,'destroy']);

