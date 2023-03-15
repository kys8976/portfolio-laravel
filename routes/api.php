<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\BoardController;

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

Route::controller(AuthController::class)->group(function(){
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/login', [AuthController::class, 'login']);
});

Route::controller(AboutController::class)->group(function(){
    Route::get('/edit_about','edit_about');
    Route::post('/update_about/{id}','update_about');
});

Route::controller(ServiceController::class)->group(function(){
    Route::get('/get_all_service','get_all_service');
    Route::post('/create_service','create_service');
    Route::post('/update_service/{id}','update_service');
    Route::get('/delete_service/{id}','delete_service');
});

Route::controller(SkillController::class)->group(function(){
    Route::get('/get_all_skill','get_all_skill');
    Route::post('/create_skill', 'create_skill');
    Route::post('/update_skill/{id}','update_skill');
    Route::get('/delete_skill/{id}','delete_skill');
});

Route::controller(BoardController::class)->group(function(){
    Route::get('/get_all_board', [BoardController::class, 'get_all_board']);
    Route::post('/create_board', [BoardController::class, 'create_board']);
    Route::post('/update_board/{id}', [BoardController::class, 'update_board']);
    Route::get('/delete_board/{id}', [BoardController::class, 'delete_board']);
});


