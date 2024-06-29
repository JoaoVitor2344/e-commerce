<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('/painel')->group(function () {
    Route::get('/', [\App\Http\Controllers\PainelController::class, 'index'])->name('painel.index');

    Route::prefix('/login')->group(function () {
        Route::get('/', [\App\Http\Controllers\PainelController::class, 'login'])->name('painel.login');
    });
});
