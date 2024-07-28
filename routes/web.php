<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');

Route::prefix('/painel')->group(function () {
    Route::get('/', [\App\Http\Controllers\PainelController::class, 'index'])->name('painel.index');

    Route::prefix('/usuarios')->group(function () {
        Route::get('/', [\App\Http\Controllers\UserController::class, 'index'])->name('painel.users.index');
        Route::get('/adicionar', [\App\Http\Controllers\UserController::class, 'create'])->name('painel.users.create');
        Route::post('/adicionar', [\App\Http\Controllers\UserController::class, 'store'])->name('painel.users.store');
        Route::get('/{id}/atualizar', [\App\Http\Controllers\UserController::class, 'edit'])->name('painel.users.edit');
        Route::put('/{id}/atualizar', [\App\Http\Controllers\UserController::class, 'update'])->name('painel.users.update');
    });

    Route::prefix('/login')->group(function () {
        Route::get('/', [\App\Http\Controllers\PainelController::class, 'login'])->name('painel.login');
    });
});

Route::prefix('/produtos')->group(function () {
    Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('/create', [\App\Http\Controllers\ProductController::class, 'create'])->name('products.create');
    Route::post('/store', [\App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\ProductController::class, 'update'])->name('products.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
});

Route::prefix('/lojas')->group(function () {
    Route::get('/', [\App\Http\Controllers\StoreController::class, 'index'])->name('stores.index');
    Route::get('/{id}', [\App\Http\Controllers\StoreController::class, 'show'])->name('stores.show');
    Route::get('/create', [\App\Http\Controllers\StoreController::class, 'create'])->name('stores.create');
    Route::post('/store', [\App\Http\Controllers\StoreController::class, 'store'])->name('stores.store');
    Route::get('/{id}/edit', [\App\Http\Controllers\StoreController::class, 'edit'])->name('stores.edit');
    Route::put('/{id}/update', [\App\Http\Controllers\StoreController::class, 'update'])->name('stores.update');
    Route::delete('/{id}/destroy', [\App\Http\Controllers\StoreController::class, 'destroy'])->name('stores.destroy');
});
