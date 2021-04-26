<?php

use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Http\Controllers\ProductController;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     $category = Category::with('products')->find(1);

//     dd($category->toArray());
// });

Route::get('/', [ProductController::class, 'index']);

Route::get('/category/{id}', [ProductController::class, 'listProduct']);

Route::get('/create', [ProductController::class, 'create']);

Route::post('/add', [ProductController::class, 'store']);

Route::get('/product/{id}/edit', [ProductController::class, 'edit']);

Route::put('/product/{id}', [ProductController::class, 'update']);

Route::get('/delete/{id}', [ProductController::class, 'destroy']);