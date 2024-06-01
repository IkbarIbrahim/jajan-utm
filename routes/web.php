<?php

use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormRegisterController;
use App\Http\Controllers\HomeController;
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

Route::post('/submit-form', [FormRegisterController::class, 'handleForm'])->name('form.submit');
Route::get('/', [HomeController::class,'home'] )->name('home');
Route::get('/postingan', [HomeController::class,'productGrids'])->name('post-product');
Route::get('/postingan/detail/{slug}', [HomeController::class, 'productDetail'])->name('post-product-detail');
Route::get('/merchant-list', [HomeController::class, 'merchantGrids'])->name('merch-list');

Route::get('/admin', function () {
    return view('Admin.Index');
})->name('adm-dashboard');

Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');
Route::get('/contact', function () {
    return view('Pages.Contact');
})->name('contact');


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