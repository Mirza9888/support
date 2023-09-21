<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class,'index', ])->name('home');

//Route::resource('users',UsersController::class);
Route::group(['prefix'=>'users'],function(){
    Route::get('/',[UsersController::class,'index'])->name('users.index');
    Route::get('/{id}/edit',[UsersController::class,'edit'])->name('users.update');
    Route::get('/{id}',[UsersController::class,'destroy'])->name('users.destroy');
    Route::get('/admin',['AdminController','index']);
});
