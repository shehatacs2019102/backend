<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DietPlanController;
use App\Http\Controllers\TaskController;
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
//public routes
Route::post('/login',[AuthController::class,'login']);

Route::post('/register',[AuthController::class,'register']);
//privare routes
Route::post('/createplan',[DietPlanController::class,'create']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthController::class, 'logout']);

    

    Route::post('/additem',[DietPlanController::class,'additem']);

    Route::get('/getuser', function(){
        return auth()->user();
    });
    
});