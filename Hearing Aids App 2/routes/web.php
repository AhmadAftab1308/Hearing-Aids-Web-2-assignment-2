<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\HearingAidController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('hearing-aids.index');
});


Route::get('/hearing-aids', [HearingAidController::class, 'index'])
    ->name('hearing-aids.index');

Route::get('/hearing-aids/{hearingAid}', [HearingAidController::class, 'show'])
    ->whereNumber('hearingAid')
    ->name('hearing-aids.show');

Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/favorites/{hearingAid}', [FavoriteController::class, 'store'])->name('favorites.store');
    Route::delete('/favorites/{hearingAid}', [FavoriteController::class, 'destroy'])->name('favorites.destroy');
});


Route::middleware(['auth', 'admin'])->group(function () {

    // Hearing Aid CRUD (admin only)
    Route::get('/hearing-aids/create', [HearingAidController::class, 'create'])->name('hearing-aids.create');
    Route::post('/hearing-aids', [HearingAidController::class, 'store'])->name('hearing-aids.store');

    Route::get('/hearing-aids/{hearingAid}/edit', [HearingAidController::class, 'edit'])->name('hearing-aids.edit');
    Route::put('/hearing-aids/{hearingAid}', [HearingAidController::class, 'update'])->name('hearing-aids.update');

    Route::delete('/hearing-aids/{hearingAid}', [HearingAidController::class, 'destroy'])->name('hearing-aids.destroy');

    // Admin brands under /admin
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resource('brands', BrandController::class)->except(['show']);
    });
});
