<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\AboutController;
use App\Http\Controllers\API\ServiceController;
use App\Http\Controllers\API\SkillController;
use App\Http\Controllers\API\EducationController;
use App\Http\Controllers\API\ExperienceController;
use App\Http\Controllers\API\ProjectController;
use App\Http\Controllers\API\TestimonialController;
use App\Http\Controllers\API\BoardController;
use App\Http\Controllers\API\PostController;

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
Route::controller(EducationController::class)->group(function(){
    Route::get('/get_all_education','get_all_education');
    Route::post('/create_education', 'create_education');
    Route::post('/update_education/{id}','update_education');
    Route::get('/delete_education/{id}','delete_education');
});
Route::controller(ExperienceController::class)->group(function(){
    Route::get('/get_all_experience','get_all_experience');
    Route::post('/create_experience', 'create_experience');
    Route::post('/update_experience/{id}','update_experience');
    Route::get('/delete_experience/{id}','delete_experience');
});
Route::controller(ProjectController::class)->group(function(){
    Route::get('/get_all_project','get_all_project');
    Route::post('/add_project', 'add_project');
    Route::post('/update_project/{id}','update_project');
    Route::get('/get_edit_project/{id}','get_edit_project');
    Route::get('/delete_project/{id}','delete_project');
});

Route::controller(TestimonialController::class)->group(function(){
    Route::get('/get_all_testimonials','get_all_testimonials');
    Route::post('/add_testimonial', 'add_testimonial');
    Route::post('/update_testimonial/{id}','update_testimonial');
    Route::get('/get_edit_testimonial/{id}','get_edit_testimonial');
    Route::get('/delete_testimonials/{id}','delete_testimonials');
});


Route::controller(BoardController::class)->group(function(){
    Route::get('/get_all_board', [BoardController::class, 'get_all_board']);
    Route::post('/create_board', [BoardController::class, 'create_board']);
    Route::post('/update_board/{id}', [BoardController::class, 'update_board']);
    Route::get('/delete_board/{id}', [BoardController::class, 'delete_board']);
});

Route::controller(PostController::class)->group(function(){
    Route::get('/get_all_post','get_all_post');
    Route::post('/create_post','create_post');
    Route::post('/update_post/{id}','update_post');
    Route::get('/delete_post/{id}','delete_post');
});



