<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\UsersController;

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
//user
Route::view('/','welcome' )->name('welcome');
Route::view('/home', 'home');
Route::view('/test', 'test');
Route::view('/about', 'about');

//master

Route::view('/master', 'master.app')->name('master');

Route::view('/auth', 'backend.admin.index')->name('admin');



//admin



Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(function(){
Route::get('/',[\App\Http\Controllers\Admin\AdminController::class, 'index'])->name('index');
}) ;

//Route::namespace('')->prefix('auth')->name('admin.')->middleware('can:manage-users')->group(function (){
//Route::resource('users', 'UsersController', ['except' =>['show', 'crate','store']]);



//});
Route::group(['prefix' => 'auth'], function () {
    Route::resource('/category', CategoryController::class);
    Route::resource('/users', UsersController::class);



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


