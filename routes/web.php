<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommentController;

use App\Http\Controllers\LoginUserController;
use App\Http\Controllers\Admin\ChatController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\LoginAdminController;
use App\Http\Controllers\FormRegisterController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\Admin\KomentarController;
use App\Http\Controllers\Admin\MerchantController;
use App\Http\Controllers\Admin\PostinganController;
use App\Http\Controllers\Merchant\ProductController;
use App\Http\Controllers\RegisterMerchantController;
use App\Http\Controllers\User\ProfileController;

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
Route::post('/comments', [CommentController::class, 'store'])->middleware('auth:user')->name('comments.store');;
Route::get('/merchant-list', [HomeController::class, 'merchantGrids'])->name('merch-list');
Route::get('/merchant/detail/{slug}', [HomeController::class, 'merchantDetail'])->name('merch-info');

Route::get('/login', [LoginUserController::class, 'login_user'])->name('login');       
Route::post('/login', [LoginUserController::class, 'login_users']);
Route::get('/logout', [LoginUserController::class, 'logout'])->name('logout');

Route::get('/login-admin', [LoginAdminController::class, 'index'])->name('login-admin');
Route::post('/login-admin', [LoginAdminController::class, 'login_admin'])->name('submit-admin');
Route::get('/logout-admin', [LoginAdminController::class, 'logout'])->name('logout-admin');

Route::get('/register-merchant', [RegisterMerchantController::class, 'index'])->name('register-merchant');
Route::post('/register-merchant', [RegisterMerchantController::class, 'register_merchants'])->name('submit-reg-merchant');

Route::get('/register-user', [RegisterUserController::class, 'index'])->name('register-user');
Route::post('/register-user', [RegisterUserController::class, 'register_user'])->name('submit-reg-user');


Route::get('/register', function () {
    return view('Auth.Register');
})->name('register');
Route::get('/contact', function () {return view('Pages.Contact');})->name('contact');

Route::get('/login', function () {
    return view('Auth.Login');
})->name('login');
Route::get('/global', function () {
    return view('Pages.Global-chat');
})->name('global');


Route::prefix('user')->name('user.')->group(
    function () {
        Route::get('/', [ProfileController::class, 'showProfile'])->middleware('auth:user')->name('index');
        Route::post('/profile', [ProfileController::class, 'updateProfile'])->middleware('auth:user')->name('update');
        Route::get('/fav', function () {
            return view('User.favourite');
        })->name('fav');
        
    }
);

Route::prefix('merchant')
    ->name('merchant.')
    ->group(function () {
        Route::get('/', function () {
            return view('Merchant.Index');
        })->name('index');
        Route::get('/preview', function () {
            return view('Merchant.Pages.Preview-toko');
        })->name('preview');

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
                Route::get('/', [PostinganController::class, 'index'])->name('index');
                Route::get('/postingan-detail/{slug}', [HomeController::class, 'productDetail'])->name('post-product-detail');
                Route::delete('/{product}', [PostinganController::class, 'destroy'])->name('destroy');
            });
        Route::prefix('global-chat')
            ->name('global-chat.')
            ->group(function () {
                Route::get('/',[ChatController::class, 'index'] )->name('index');
                Route::delete('/{chat}', [ChatController::class, 'destroy'])->name('destroy');
            });
        Route::prefix('komentar')
            ->name('komentar.')
            ->group(function () {
                Route::get('/',[KomentarController::class, 'index'] )->name('index');
                Route::delete('/{comment}', [KomentarController::class,'destroy'])->name('destroy');
            });
    });