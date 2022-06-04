<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ibraheemController;
use Illuminate\Support\Facades\Auth;

// category
Route::get('all_categories' , [ibraheemController::class , 'all_categories'])->name('all_categories');
Route::get('create_category' , [ibraheemController::class , 'create_category'])->name('create_category');
Route::post('store', [ibraheemController::class , 'store'])->name('category.store');
Route::put('edit/{id}', [ibraheemController::class , 'edit']);
Route::patch('update/{id}', [ibraheemController::class , 'update']);
Route::delete('destroy/{id}', [ibraheemController::class , 'destroy']);


//  product
Route::get('all_products' , [ibraheemController::class , 'all_products'])->name('all_products');
Route::get('create_product' , [ibraheemController::class , 'create_product'])->name('create_product');
Route::post('storePro', [ibraheemController::class , 'storePro'])->name('category.storePro');
Route::put('editPro/{id}', [ibraheemController::class , 'editPro']);
Route::patch('updatePro/{id}', [ibraheemController::class , 'updatePro']);
Route::delete('destroyPro/{id}', [ibraheemController::class , 'destroyPro']);



//  order
Route::get('add_order' , [ibraheemController::class , 'add_order'])->name('add_order');
Route::post('storeOrd' , [ibraheemController::class , 'storeOrd'])->name('storeOrd');


//dashbord
Route::get('/', [ibraheemController::class , 'index']) ;
//Route::post('/' , [ibraheemController::class , 'index'])->name('layout.dashbord');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
