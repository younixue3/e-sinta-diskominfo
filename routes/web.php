<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Front\Home\HomeController::class, 'index'])->name('home');
Route::post('/search', [App\Http\Controllers\Front\Home\HomeController::class, 'show'])->name('home.search');
Auth::routes();
Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::name('dashboard.')->prefix('dashboard')->middleware('auth')->group(function () {
    Route::get('/', [\App\Http\Controllers\Back\Dashboard\DashboardController::class, 'index'])->name('index');
    Route::resource('art', \App\Http\Controllers\Back\ART\ARTController::class);
});
