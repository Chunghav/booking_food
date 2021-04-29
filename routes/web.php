<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ImageUploadController;
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



  
 
Route::get('/about', [App\Http\Controllers\PageController::class, 'aboutpage'])->name('pages.about');       
Route::get('/contact', [App\Http\Controllers\PageController::class, 'contactpage'])->name('pages.contact');
Route::get('/news', [App\Http\Controllers\PageController::class, 'newspage'])->name('pages.news');
Route::get('/order', [App\Http\Controllers\PageController::class, 'orderpage'])->name('pages.order');
Route::get('/homepage', [App\Http\Controllers\PageController::class, 'homepage'])->name('pages.homepage');
Route::get('/master', [App\Http\Controllers\PageController::class, 'master'])->name('pages.master');


Route::get('/product', [App\Http\Controllers\ProductsController::class, 'index'])->name('product');
Route::get('detail/{id}', [App\Http\Controllers\ProductsController::class, 'detail'])->name('detail');
Route::get('/search', [App\Http\Controllers\ProductsController::class, 'search'])->name('search');
Route::get('/addToCart', [App\Http\Controllers\ProductsController::class, 'addToCart'])->name('addToCart');
Route::get('/cartlist', [App\Http\Controllers\ProductsController::class, 'cartlist'])->name('cartlist');
Route::get('/removecart', [App\Http\Controllers\ProductsController::class, 'removecart'])->name('removecart');
Route::get('/ordernow', [App\Http\Controllers\ProductsController::class, 'ordernow'])->name('ordernow');

Route::get('/create', [App\Http\Controllers\ProductsController::class, 'create'])->name('create');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('posts',PostsController::class);