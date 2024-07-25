<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogOutController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckAuthMiddleware;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\CheckIsAdminRoleMiddleware;

// Home routes
Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/contact', fn () => view('contact'))->name('contact');
Route::get('/about', fn () => view('about'))->name('about');

// Book routes
Route::prefix('/book')->group(function () {
    Route::controller(BookController::class)->group(function () {
        Route::get('/{id}', 'show');
    });
});

// Auth routes
Route::prefix('/auth')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'index')->name('auth.login');
        Route::post('/login', 'action')->name('auth.loginAction');
    });

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'index')->name('auth.register');
        Route::post('/register', 'action')->name('auth.registerAction');
    });
});

// Redirects for login and register
Route::get('/login', fn () => redirect()->to('/auth/login'));
Route::get('/register', fn () => redirect()->to('/auth/register'));

// Search route
Route::get('/search', [BookController::class, 'search']);

// Testing routes
Route::prefix('/testing')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/json', 'requestJson');
        Route::get('/arrayjson', 'requestArray');
        Route::get('/hellofunc', 'view');
        Route::get('/redirect', 'redirect');
        Route::get('/env', 'envTest');
        Route::get('/querybuilder', 'index');
    });
});

// Middleware-protected routes
Route::middleware(CheckAuthMiddleware::class)->group(function () {
    Route::controller(BookController::class)->group(function () {
        Route::get('/create-book', 'indexCreate');
        Route::post('/create-book', 'store')->name('book.create');
        Route::get('/manager', 'indexManager')->name('book.manager');
        Route::patch('/manager', 'update')->name('book.update');
        Route::get('/manager/{id}/delete', 'delete')->name('book.delete');
        Route::get('/manager/{id}', 'edit')->name('book.edit');
    });

    Route::prefix('/user')->group(function () {
        Route::get('/{id}', [ProfileController::class, 'index']);
        Route::get('/{id}/edit', [SettingsController::class, 'index']);
        Route::patch('/', [SettingsController::class, 'updateProfile'])->name('settings.updateProfile');
    });
    Route::get('/delete', [SettingsController::class, 'deleteProfileImage'])->name('settings.deleteProfileImage');
});

// Logout route
Route::get('/logout', [LogOutController::class, 'action']);

// Admin routes
Route::middleware([CheckAuthMiddleware::class, CheckIsAdminRoleMiddleware::class])->group(function () {
    Route::prefix('/admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/manager', 'index')->name('admin.index');
            Route::patch('/manager', 'update')->name('admin.update');
            Route::get('/manager/{id}/delete', 'delete')->name('admin.delete');
            Route::get('/manager/{id}', 'edit')->name('admin.edit');
        });
    });
});
