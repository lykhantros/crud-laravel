<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/', [FrontController::class,'index']);
// rutas crud : index, store, update,destroy, create, edit, show
Route::resource('admin/category', CategoryController::class);

//Auth::routes();
/*
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/