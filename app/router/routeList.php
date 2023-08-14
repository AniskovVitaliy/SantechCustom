<?php

use Core\router\Route;

/**
 * Public
 */

// Home
Route::get('/', \App\controller\public\home\IndexController::class, 'index')->name('public.home.index');

// Category
Route::get('/category', \app\controller\public\category\IndexController::class, 'index')->name('public.category.index');

// Product
Route::get('/product', \app\controller\public\product\IndexController::class, 'index')->name('public.product.index');

/**
 * Admin
 */

// Home
Route::get('/admin', \App\controller\admin\home\IndexController::class, 'index')->name('admin.home.index');

//test
Route::post('/main', \App\controller\Main::class, 'show');

