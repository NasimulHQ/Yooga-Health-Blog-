<?php

use App\Http\Controllers\Admin\categoryController;
use App\Http\Controllers\Admin\HealthController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::middleware(['auth'])->group(function () {
        Route::resources([
            'categories' => categoryController::class,
            'yogahealth' => HealthController::class,

        ]);
    });
});
