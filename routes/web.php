<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/home', function () {
    return view('home');
});


//admin


Route::get('/auth', function () {
    return view('backend.admin.index');
});


Route::group(['prefix' => 'auth'], function () {
    Route::resource('/category', 'App\Http\Controllers\CategoryController');
//    Route::get('/category/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
//    Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
//    Route::post('/category/store', [App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
//    Route::get('/category/{id}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
//    Route::put('/category/{id}/update', [App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
});


Auth::routes();
Route::get('register', function () {
    return redirect()->route('register.user');
})->name('register');
Route::get('/register/user', function () {
    return view('auth.register');
})->name('register.user');
Route::get('/register/master', function () {
    return view('master.register');
})->name('register.master');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jobs', [App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
Route::get('/jobs/create', [App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs/store', [App\Http\Controllers\JobController::class, 'store'])->name('jobs.store');


