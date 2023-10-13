<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
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

// Route::any('/', function () {
//     return view('welcome');
// });

Route::any('/',[BaseController::class,'home']);
Route::get('/home',[BaseController::class,'home'])->name('home');
Route::get('/specialOffer',[BaseController::class,'specialOffer'])->name('specialOffer');
Route::get('/delivery',[BaseController::class,'delivery'])->name('delivery');
Route::get('/contact-us',[BaseController::class,'contact'])->name('contact');
Route::get('/cart',[BaseController::class,'cart'])->name('cart');
Route::any('/product_view/{id}',[BaseController::class,'product_view'])->name('productView');
Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
Route::post('/admin/login',[AdminController::class,'makeLogin'])->name('admin.makeLogin');

//Route::group(['middleware'=>'auth'],function(){  //middleware is used to ensure that user is loggedin
    Route::any('/admin/dashboard',[AdminController::class,'dashboard'])->name('admin.dashboard');
    Route::get('/admin/logout',[AdminController::class,'logout'])->name('admin.logout');

Route::get('/category/add',[CategoryController::class,'create'])->name('category.create');
Route::get('/categories',[CategoryController::class,'index'])->name('category.list');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
Route::get('/categories/edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/categories/edit/{id}',[CategoryController::class,'update'])->name('category.update');
Route::post('/category/delete',[CategoryController::class,'destroy'])->name('category.delete');
Route::get('/products',[ProductController::class,'index'])->name('product.list');
Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
Route::post('/products/create',[ProductController::class,'store'])->name('product.store');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::post('/product/edit/{id}',[ProductController::class,'update'])->name('product.update');
Route::post('/product/delete',[ProductController::class,'destroy'])->name('product.delete');
Route::get('/product/details/{id}',[ProductController::class,'extraDetails'])->name('product.extraDetails');
Route::post('/product/details/{id}',[ProductController::class,'extraDetailsStore'])->name('product.extraDetailsStore');
//});