<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormRegisterController;

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
    return view('Homepage');
});

Route::get('/login', function(){return view('Auth.login');})->name('login');
// web.php
Route::post('/submit-form', [FormRegisterController::class, 'handleForm'])->name('form.submit');

Route::get('/register', function(){return view('Auth.Register');})->name('register');