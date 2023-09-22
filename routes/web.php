<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TicketController;

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class,'index', ])->name('login');
//USER AND TICKET ROUTES//
//Route::group(['/'],function(){
//USERS//
Route::group(['prefix'=>'users', 'as' => 'users.'],function() {
    Route::get('', [UsersController::class, 'index'])->name('index');
    Route::get('/create', [UsersController::class, 'create'])->name('create');
    Route::post('', [UsersController::class, 'store'])->name('store');
    Route::get('/{id}/edit', [UsersController::class, 'edit'])->name('edit');
    Route::put('/{id}/update', [UsersController::class, 'update'])->name('update');
    Route::delete('/{id}', [UsersController::class, 'destroy'])->name('destroy');

});
//TICKETS ROUTES//




Route::group(['prefix'=>'tickets', 'as' => 'tickets.'],function() {
    Route::get('/', [TicketController::class, 'index'])->name('index');
    Route::get('/create', [TicketController::class, 'create'])->name('create');
    Route::post('', [TicketController::class, 'store'])->name('store');

//    Route::group(['as' => 'settings.', 'prefix' => 'settings'],function(){
//        Route::get('', function () {
//            return 'OK';
//        })->name('index');
//    });

});



       



















