<?php

use Core\router\Route;

// Home
Route::get('/', \App\controller\home\IndexController::class, 'index')->name('home.index');

// Category
Route::get('/category', \app\controller\category\IndexController::class, 'index')->name('category.index');

// Product
Route::get('/product', \app\controller\product\IndexController::class, 'index')->name('product.index');