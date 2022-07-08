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

use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

Route::controller(EventController::class)->group(function(){
    Route::get('/', 'index');
    Route::get('/events/create','create')->middleware('auth');
    Route::get('/events/{id}','show');
    Route::post('/events','store');
    Route::get('/dashboard', 'dashboard')->middleware('auth');
    Route::delete('/events/{id}', 'destroy')->middleware('auth');
    Route::get('/events/edit/{id}', 'edit')->middleware('auth');
    Route::put('/events/update/{id}', 'update')->middleware('auth');
    Route::post('/events/join/{id}', 'joinEvent')->middleware('auth');
    Route::delete('/events/leave/{id}', 'leaveEvent')->middleware('auth');
});

Route::controller(ContactController::class)->group(function(){
    Route::get('/contact/{id}', 'contact');
});



