<?php

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
Route::any('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::any('/change-password', [App\Http\Controllers\UserController::class, 'changePassword'])->name('changePassword');
Route::any('/edit-profile', [App\Http\Controllers\UserController::class, 'editProfile'])->name('editProfile');
Route::any('/etsy-config', [App\Http\Controllers\EtsyController::class, 'etsyConfig'])->name('etsyConfig');

