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
})->name('home');



Route::get('/merchant-list', function () {
    return view('Pages.Merchant');
})->name('merch-list');


Route::get('/contact', function () {
    return view('Pages.Contact');
})->name('contact');
Route::get('/postingan/detail', function () {
    return view('Pages.Postingan-desc');
})->name('post-product-detail');
Route::get('/postingan', function () {
    return view('Pages.Postingan');
})->name('post-product');
Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');


Route::post('/submit-form', [FormRegisterController::class, 'handleForm'])->name('form.submit');

Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');
Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');
Route::get('/merchant', function () {
    return view('Merchant.Index');
})->name('merchant');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('Admin.Index');
    })->name('index');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/', function () {
            return view('Admin.Users.Index');
        })->name('index');
        Route::get('/{user}/edit', function () {
            return view('Admin.Users.Edit');
        })->name('edit');
    });

    Route::prefix('merchants')->name('merchants.')->group(function () {
        Route::get('/', function () {
            return view('Admin.Merchants.Index');
        })->name('index');
    });
});
