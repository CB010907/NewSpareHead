<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;

Route::get('/',[MainController::class,'SpareHeadHome']);

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified',
//])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
//});

Route::get('/home',[MainController::class,'AuthenticationUserAdmin']) -> name('home');

Route::get('/category',[AdminController::class,'view_category']);
Route::post('/add_category',[AdminController::class,'add_category']);
Route::get('/delete_category/{id}',[AdminController::class,'delete_category']);

Route::get('/product',[AdminController::class,'product']);
Route::post('/add_product',[AdminController::class,'add_product']);
Route::get('/display_product',[AdminController::class,'display_product']);
Route::get('/delete_product/{id}',[AdminController::class,'delete_product']);
Route::get('/edit_product/{id}',[AdminController::class,'edit_product']);
Route::post('/edit_product_confirm/{id}',[AdminController::class,'edit_product_confirm']);

Route::get('/product_details/{id}',[MainController::class,'product_details']);

Route::post('/add_cart/{id}',[MainController::class,'add_cart']);
Route::get('/show_cart',[MainController::class,'show_cart']);
