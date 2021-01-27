<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ProvinsiControllers;
use App\http\Controllers\KotaControllers;
use App\http\Controllers\KecamatanControllers;
use App\http\Controllers\DesaControllers;
use App\http\Controllers\RtControllers;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('admin',function(){
    return view('admin.index');
    
Route::group(['prefix'=> 'admin' , 'middleware'=>['auth']] , function (){
    Route::resource('provinsi',ProvinsiController::class);
    {
        return view('admin.index');
    };
    Route::resources('Provinsi',ProvinsiController::class);
    Route::resources('Kota',KotaController::class);
    Route::resources('Kecamatan',KecamatanController::class);
    Route::resources('Desa',DesaController::class);
    Route::resources('Rt',RtController::class);
});

});
