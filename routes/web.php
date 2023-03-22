<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
Route::redirect('/', '/conferences');
Route::get('/conferences',[App\Http\Controllers\ConferenceController::class, 'index'])->name('conferences.index');

Auth::routes();

Route::middleware('auth')->name('conferences.')->group(function () {
    Route::get('/conferences/create', [App\Http\Controllers\ConferenceController::class, 'create'])->middleware('admin')->name('create');
    Route::post('/conferences', [App\Http\Controllers\ConferenceController::class, 'store'])->middleware('admin')->name('store');
    Route::get('/conferences/{id}/edit', [App\Http\Controllers\ConferenceController::class, 'edit'])->middleware('admin')->name('edit');
    Route::put('/conferences/{id}/edit', [App\Http\Controllers\ConferenceController::class, 'update'])->middleware('admin')->name('update');
    Route::delete('/conferences/{id}/delete', [App\Http\Controllers\ConferenceController::class, 'destroy'])->middleware('admin')->name('destroy');

    Route::get('/conferences/{id}', [App\Http\Controllers\ConferenceController::class, 'show'])->name('show');
    Route::post('/conferences/{id}/join', [App\Http\Controllers\UserController::class, 'joinConference'])->name('join');
    Route::delete('/conferences/{id}/cancel', [App\Http\Controllers\UserController::class, 'cancelConference'])->name('cancel');    
});
//require __DIR__.'/auth.php';
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
