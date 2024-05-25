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
Route::get('/admin', function () {
    return view('Admin.Index');
})->name('adm-dashboard');
Route::get('/', function () {
    return view('Homepage');
})->name('home');

Route::post('/submit-form', [FormRegisterController::class, 'handleForm'])->name('form.submit');
Route::get('/merchant-list', function () {
    return view('Pages.Merchant');
})->name('merch-list');
Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');
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
Route::get('/merchant', function () {
    return view('Merchant.Index');
})->name('merchant');
Route::get('/global', function () {
    return view('Pages.Global-chat');
})->name('global');

Route::prefix('merchant')
    ->name('merchant.')
    ->group(function () {
        Route::prefix('products')
            ->name('products.')
            ->group(function () {
                Route::get('/{product}/edit', function () {
                    return view('Merchant.Products.Edit');
                })->name('edit');
            });
    });

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', function () {
            return view('Admin.Index');
        })->name('index');

        Route::prefix('users')
            ->name('users.')
            ->group(function () {
                Route::get('/', function () {
                    return view('Admin.Users.Index');
                })->name('index');
                Route::get('/{user}/edit', function () {
                    return view('Admin.Users.Edit');
                })->name('edit');
            });

        Route::prefix('merchants')
            ->name('merchants.')
            ->group(function () {
                Route::get('/', function () {
                    return view('Admin.Merchants.Index');
                })->name('index');
                Route::get('/{merchant}/edit', function () {
                    return view('Admin.Merchants.Edit');
                })->name('edit');
            });
        Route::prefix('products')
            ->name('products.')
            ->group(function () {
                Route::get('/', function () {
                    return view('Admin.Products.Index');
                })->name('index');
            });
        Route::prefix('global-chat')
            ->name('global-chat.')
            ->group(function () {
                Route::get('/', function () {
                    return view('Admin.Chat.Index');
                })->name('index');
            });
    });
