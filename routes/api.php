<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
use App\Http\Controllers\Api\PostsController;
use App\Http\Controllers\Api\ProvinsiController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
// Route::get('provinsi',[ApiController::class,'provinsi']);
// Route::get('posts',[PostsController::class,'show']);
// Route::get('/posts',[PostsController::class,'index']);
// Route::post('/posts',[PostsController::class,'store']);
// Route::get('/posts/{id}',[PostsController::class,'show']);
// Route::put('/posts/{id}',[PostsController::class,'update']);
// Route::delete('/posts/{id}',[PostsController::class,'destroy']);
// Route::get('/posts', 'PostsController@index');
// Route::post('/posts/store', 'PostsController@store');
// Route::get('/posts/{id?}', 'PostsController@show');
// Route::post('/posts/update/{id?}', 'PostsController@update');
// Route::delete('/posts/{id?}', 'PostsController@destroy');
// API Provinsi
Route::get('provinsi', [ProvinsiController::class, 'index']);
Route::post('provinsi', [ProvinsiController::class, 'store']);
Route::get('provinsi/{id}', [ProvinsiController::class, 'show']);
Route::post('provinsi/update/{id}', [ProvinsiController::class, 'update']);
Route::delete('/provinsi/{id}', [ProvinsiController::class, 'destroy']);
