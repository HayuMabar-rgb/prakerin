<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProvinsiController;
use App\http\Controllers\KotaController;
use App\http\Controllers\KecamatanController;
use App\http\Controllers\DesaController;
use App\http\Controllers\RwController;
use App\http\Controllers\kasusController;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
Route::group(['prefix'=>'admin','middleware'=>['auth']],function(){
    Route::get('/',function(){
        return view('admin.index');
    });
    Route::resource('provinsi',ProvinsiController::class);
    Route::resource('kota',KotaController::class);
    Route::resource('kecamatan',KecamatanController::class);
    Route::resource('desa',DesaController::class);
    Route::resource('rw',RwController::class);
    Route::resource('kasus',KasusController::class);
    Route::get('/posts', 'PostsController@index');
    Route::post('/posts/store', 'PostsController@store');
    Route::get('/posts/{id?}', 'PostsController@show');
    Route::post('/posts/update/{id?}', 'PostsController@update');
    Route::delete('/posts/{id?}', 'PostsController@destroy');



});
// });

// });
