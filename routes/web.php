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

Route::get('/', [App\Http\Controllers\viewController::class, 'home']) ->name('home');
Route::get('/servicios', [App\Http\Controllers\viewController::class, 'services']) ->name('services');
Route::get('/contacto', [App\Http\Controllers\viewController::class, 'contact']) ->name('contact');
Route::post('/contacto', [App\Http\Controllers\sendMailController::class, 'send'])->name('sendMail');
Route::get('/politicas-privacidad', [App\Http\Controllers\viewController::class, 'privacidad'])
->name('privacidad');
