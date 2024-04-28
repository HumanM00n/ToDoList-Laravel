<?php

use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('home');
});


Route::get('/register', [UserController::class, 'Auth']);
Route::post('/register', [UserController::class, 'registerUser']);

Route::get('/email/verify', [UserController::class, 'notice'])
->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verification'])
->middleware(['{verifyemail ,signed'])
->name('verification.verify');