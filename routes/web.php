<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\Store\adminOrdersController;
use App\Http\Controllers\Backend\Store\productsManagementController;
use App\Http\Controllers\Backend\Store\promotionsManagementController;
use App\Http\Controllers\Backend\Store\subcategoriesManagementController;
use App\Http\Controllers\Backend\usersManagementController;
use App\Http\Controllers\Backend\bannersManagementController;


use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShopcartController;
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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function(){
    $products=DB::select('select * from help');
    return $products;
});
Route::get('/testhome', function () {
    return view('index');
});
*/

Auth::routes();
//Frontend routes
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/shop-cart', [ShopcartController::class, 'index'])->name('shopcart');

//Admin panel routes
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/orders', [adminOrdersController::class, 'index'])->name('admin.store.orders')->middleware('is_admin');
Route::get('/products', [productsManagementController::class, 'index'])->name('admin.store.products')->middleware('is_admin');
Route::get('/promotions', [promotionsManagementController::class, 'index'])->name('admin.store.promotions')->middleware('is_admin');
Route::get('/subcategories', [subcategoriesManagementController::class, 'index'])->name('admin.store.subcategories')->middleware('is_admin');
Route::get('/users', [usersManagementController::class, 'index'])->name('admin.users')->middleware('is_admin');
Route::get('/banners', [bannersManagementController::class, 'index'])->name('admin.banners')->middleware('is_admin');
