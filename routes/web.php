<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::group(["prefix" => "products"], function () {
    // NOTE: Show Page
    Route::get('/index', [ProductController::class, 'index'])->name('index');

    // INFO: Products Page
    Route::get('/create', [ProductController::class, 'create'])->name('create');
    Route::post('/store', [ProductController::class, 'store'])->name('store');

    // INFO: Show
    Route::get('/show/{id}', [ProductController::class, 'show'])->name('show');

    // INFO: Edit
    Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('edit');

    // TODO: Update
    Route::put('/update/{id}', [ProductController::class, 'update'])->name('update');

    // // INFO: Delete
    Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('destroy');
});


// Route::resource('products', ProductController::class);
