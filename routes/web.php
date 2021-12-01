<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//---------------------------fetching products from db-------------------------------------------
Route::middleware(['auth:sanctum', 'verified'])
->get('/products',[ProductController::class,'fetchProductfromdb'])->name('products');
//------------------------------for adding product page get and post ------------------------------------
Route::middleware(['auth:sanctum', 'verified'])->get('/addProduct', function () {
    return view('addProduct');
})->name('addProduct');

Route::middleware(['auth:sanctum', 'verified'])
->post('/addingproduct',[ProductController::class,'addProduct'])->name('addProductPostRequest');

//------------------------------for EDIT product page get and post ------------------------------------


Route::middleware(['auth:sanctum', 'verified'])
->get('/editProduct/{id}', [ProductController::class,'editProduct' ])->name('editProduct');

Route::middleware(['auth:sanctum', 'verified'])
->post('/updateProductPostRequest',[ProductController::class,'updateProduct'])->name('updateProductPostRequest');

//---------------------------------delete------------------------------------------------

Route::middleware(['auth:sanctum', 'verified'])
->get('/deleteProduct/{id}', [ProductController::class,'deleteProduct' ])->name('deleteProduct');

//---------------------------------------------------------------------------------


Route::middleware(['auth:sanctum', 'verified'])->get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/about', function () {
    return view('about');
});
