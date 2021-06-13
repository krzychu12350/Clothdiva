<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\Store\adminOrdersController;
use App\Http\Controllers\Backend\Store\productsManagementController;
use App\Http\Controllers\Backend\Store\promotionsManagementController;
use App\Http\Controllers\Backend\Store\subcategoriesManagementController;
use App\Http\Controllers\Backend\usersManagementController;
use App\Http\Controllers\Backend\bannersManagementController;
use App\Http\Controllers\Auth\MobileLogRegController;


use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\ContactUsMailController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\ShopcartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\FavouritesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\Frontend\ProductsDetailsController;
use App\Http\Controllers\Frontend\SearchEngineController;
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

Auth::routes();
//Frontend routes
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'index'])->name('shop');
//Route::get('/products/{type}/{subcategory}', [ProductsController::class, 'showProductsbySize'])->name('productsbySize');

Route::post('/productsbySize/{category}/{subcategory}', [ProductsController::class, 'showProductsbySize']);

Route::get('/products/{type}', [ProductsController::class, 'showProducts'])->name('showProducts');
Route::get('/products/details/{id}', [ProductsDetailsController::class, 'details'])->name('productdetails');



Route::post('/search', [SearchEngineController::class, 'searchProducts'])->name('search');





Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/contact-us',[ContactUsMailController::class, 'ContactUsForm'])->name('ContactUsForm');

Route::get('/shop-cart', [ShopcartController::class, 'index'])->name('shopcart')->middleware('auth');

Route::get('/add-to-cart/{id}', [ShopcartController::class, 'addtocart'])->name('addtoCart')->middleware('auth');

Route::delete('/remove-from-cart',  [ShopcartController::class, 'removefromCart'])->name('remove.cart')->middleware('auth');
Route::patch('/update-cart',  [ShopcartController::class, 'updatefromCart'])->name('update.cart')->middleware('auth');

Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout')->middleware('auth');
Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order')->middleware('auth');

Route::get('/mobile',[MobileLogRegController::class,'index'])->name('mobile');
Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites')->middleware('auth');
Route::get('/add-favourite', [FavouritesController::class, 'addFavouriteProduct'])->name('add.favourite')->middleware('auth');
Route::get('/del-favourite', [FavouritesController::class, 'delFavouriteProduct'])->name('del.favourite')->middleware('auth');



//Admin panel routes
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/orders', [adminOrdersController::class, 'index'])->name('admin.store.orders')->middleware('is_admin');
Route::get('/products', [productsManagementController::class, 'index'])->name('admin.store.products')->middleware('is_admin');
Route::get('/promotions', [promotionsManagementController::class, 'index'])->name('admin.store.promotions')->middleware('is_admin');

Route::get('/promotions-delete', [promotionsManagementController::class, 'destroy'])->name('admin.promotion.destroy')->middleware('is_admin');

Route::get('/subcategories', [subcategoriesManagementController::class, 'index'])->name('admin.store.subcategories')->middleware('is_admin');
Route::get('/subcategories-delete', [subcategoriesManagementController::class, 'destroy'])->name('admin.store.subcategories.destroy')->middleware('is_admin');

Route::get('/users', [usersManagementController::class, 'index'])->name('admin.users')->middleware('is_admin');
Route::get('/users-delete', [usersManagementController::class, 'destroy'])->name('admin.user.destroy')->middleware('is_admin');
Route::get('/banners', [bannersManagementController::class, 'index'])->name('admin.banners')->middleware('is_admin');
#$function=[InstagramController::class, 'feed'];
Route::get('/instagram', [
    'name' => 'Instagram Feed',
    'as' => 'app.instagram.feed',
    'uses' => 'App\Http\Controllers\InstagramController@feed',
]);

