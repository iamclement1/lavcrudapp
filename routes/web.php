<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//CUSTOM ROUTES

Route::controller(UserController::class)->group(function () {
    Route::get('/users', 'index')->name('user.index');
    Route::get('/users/create', 'create')->name('user.create');
    Route::get('/users/store', 'store')->name('user.store');
    Route::get('/users/{user}', 'show')->name('user.show');
    Route::get('/users/{user}/edit', 'edit')->name('user.edit');
    Route::get('/users/{user}/update', 'update')->name('user.update');
    Route::get('/users/{user}/delete', 'delete')->name('user.delete');
});
