<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;


Route::get('/', function () {
    return view('welcome');
});
//Route:: get('/products', [ProductsController::class, 'index'])->name('products.index');
//Route:: get('/products', [ProductsController::class, 'store'])->name('products.store');
//Route:: get('/products/create', [ProductsController::class, 'create'])->name('products.create');
//Route:: get('/products/{id}', [ProductsController::class, 'destoy'])->name('products.destoy');
Route::resource('/products',ProductController::class,);
