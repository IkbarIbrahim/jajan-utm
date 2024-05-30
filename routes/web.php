<?php

use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormRegisterController;
use App\Http\Controllers\Merchant\ProductController;

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
Route::get('/global', function () {
    return view('Pages.Global-chat');
})->name('global');

Route::prefix('merchant')
    ->name('merchant.')
    ->group(function () {
        Route::get('/', function () {
            return view('Merchant.Index');
        })->name('index');

        Route::prefix('products')
            ->name('products.')
            ->group(function () {
                Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
                Route::put('/{product}', [ProductController::class, 'update'])->name('update');
                Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
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
                Route::get('/', [UserController::class, 'index'])->name('index');
                Route::get('/{user}/edit', [UserController::class, 'edit'])->name('edit');
                Route::put('/{user}/change-password', [UserController::class, 'updatePassword'])->name('update-password');
                Route::delete('/{user}', [UserController::class, 'destroy'])->name('destroy');
            });

        Route::prefix('merchants')
            ->name('merchants.')
            ->group(function () {
                Route::get('/', [MerchantController::class, 'index'])->name('index');
                Route::get('/{merchant}/edit', [MerchantController::class, 'edit'])->name('edit');
                Route::put('/{merchant}/change-password', [MerchantController::class, 'updatePassword'])->name('update-password');
                Route::delete('/{merchant}', [MerchantController::class, 'destroy'])->name('destroy');
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
