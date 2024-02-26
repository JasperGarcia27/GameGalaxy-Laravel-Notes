<?php

use Illuminate\Support\Facades\Route;

// link the PostController file
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', [ProductController::class, 'welcome']);

Auth::routes();

/* ------------------- HOME CONTROLLER ------------------- */ 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'welcome'])->name('home');

Route::get('/index', [HomeController::class, 'index'])->name('home');


/* ------------------- PRODUCT CONTROLLER ------------------- */ 
Route::get('/products/addProduct', [ProductController::class, 'add']);

Route::post('/products', [ProductController::class, 'store']);

Route::get('/products', [ProductController::class, 'index']);

Route::get('/myProducts', [ProductController::class, 'myProducts']);

Route::get('/products/{id}', [ProductController::class, 'show']);

Route::post('/products/{id}/order', [ProductController::class, 'order']);

Route::get('/products/{id}/edit', [ProductController::class, 'editproduct']);

Route::put('/updateProducts/{id}', [ProductController::class, 'updateproduct']);

Route::delete('/products/{id}/archive', [ProductController::class, 'archive']);

Route::delete('/products/{id}/activate', [ProductController::class, 'activate']);


/* ------------------- USER CONTROLLER ------------------- */ 
Route::get('/users', [UserController::class, 'allAccounts']);

Route::get('/profile', [UserController::class, 'viewProfile']);

Route::get('/update-profile', [UserController::class, 'updateProfile']);

Route::put('/update-profile/{id}', [UserController::class, 'addProfile']);

Route::delete('/update-profile/{id}/seller', [UserController::class, 'isSeller']);

Route::delete('/update-profile/{id}/user', [UserController::class, 'isUser']);

Route::delete('/update-profile/{id}/admin', [UserController::class, 'isAdmin']);

