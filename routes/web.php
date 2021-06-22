<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\Store\ordersManagementController;
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
use App\Http\Controllers\Frontend\UserDashboardController;
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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('about-us');
Route::get('/privacy-policy', [HomeController::class, 'privacyPolicy'])->name('policy');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/dashboard', [HomeController::class, 'showDashboard'])->name('user.dashboard')->middleware('auth');

Route::post('/update-account-data', [UserDashboardController::class, 'updateAccountData'])->name('update.account')->middleware('auth');

Route::post('/add-address-data', [UserDashboardController::class, 'addAddressData'])->name('add.address.data')->middleware('auth');


//Route::get('/shop', [ShopController::class, 'index'])->name('shop');
//Route::get('/products/{type}/{subcategory}', [ProductsController::class, 'showProductsbySize'])->name('productsbySize');

Route::post('/productsbySize/{category}/{subcategory}', [ProductsController::class, 'showProductsbySize']);
Route::post('/productsbyPrice', [ProductsController::class, 'showProductsbyPrice'])->name('shop.by.price');

Route::post('/productsbyColor/{category}/{subcategory}', [ProductsController::class, 'showProductsbyColor']);


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

Route::get('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order')->middleware('auth');

Route::get('/mobile',[MobileLogRegController::class,'index'])->name('mobile');
Route::get('/favourites', [FavouritesController::class, 'index'])->name('favourites')->middleware('auth');
Route::get('/add-favourite', [FavouritesController::class, 'addFavouriteProduct'])->name('add.favourite')->middleware('auth');
Route::get('/del-favourite', [FavouritesController::class, 'delFavouriteProduct'])->name('del.favourite')->middleware('auth');



//Admin panel routes
Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
//Route::get('/admin', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/orders', [ordersManagementController::class, 'index'])->name('admin.store.orders')->middleware('is_admin');
Route::post('/order-create', [ordersManagementController::class, 'create'])->name('admin.store.order.create')->middleware('is_admin');
Route::get('/order-update', [ordersManagementController::class, 'update'])->name('admin.store.order.update')->middleware('is_admin');
Route::get('/order-delete', [ordersManagementController::class, 'destroy'])->name('admin.store.order.destroy')->middleware('is_admin');



Route::get('/products', [productsManagementController::class, 'index'])->name('admin.store.products')->middleware('is_admin');
Route::post('/product-create', [productsManagementController::class, 'create'])->name('admin.store.product.create')->middleware('is_admin');
Route::post('/product-update', [productsManagementController::class, 'update'])->name('admin.store.product.update')->middleware('is_admin');
Route::get('/product-delete', [productsManagementController::class, 'destroy'])->name('admin.store.product.destroy')->middleware('is_admin');



Route::get('/promotions', [promotionsManagementController::class, 'index'])->name('admin.store.promotions')->middleware('is_admin');
Route::post('/promotion-create', [promotionsManagementController::class, 'create'])->name('admin.promotion.create')->middleware('is_admin');
Route::post('/promotion-update', [promotionsManagementController::class, 'update'])->name('admin.promotion.update')->middleware('is_admin');
Route::get('/promotion-delete', [promotionsManagementController::class, 'destroy'])->name('admin.promotion.destroy')->middleware('is_admin');

Route::get('/subcategories', [subcategoriesManagementController::class, 'index'])->name('admin.store.subcategories')->middleware('is_admin');
Route::post('/subcategory-create', [subcategoriesManagementController::class, 'create'])->name('admin.store.subcategories.create')->middleware('is_admin');
Route::post('/subcategory-update', [subcategoriesManagementController::class, 'update'])->name('admin.store.subcategories.update')->middleware('is_admin');
Route::get('/subcategory-delete', [subcategoriesManagementController::class, 'destroy'])->name('admin.store.subcategories.destroy')->middleware('is_admin');


Route::get('/users', [usersManagementController::class, 'index'])->name('admin.users')->middleware('is_admin');
Route::post('/users-create', [usersManagementController::class, 'create'])->name('admin.user.create')->middleware('is_admin');
Route::post('/users-update', [usersManagementController::class, 'update'])->name('admin.user.update')->middleware('is_admin');
Route::get('/users-delete', [usersManagementController::class, 'destroy'])->name('admin.user.destroy')->middleware('is_admin');

Route::get('/slider', [bannersManagementController::class, 'index'])->name('admin.slider')->middleware('is_admin');

Route::post('/slider-create', [bannersManagementController::class, 'create'])->name('admin.slider.create')->middleware('is_admin');
Route::post('/slider-update', [bannersManagementController::class, 'update'])->name('admin.slider.update')->middleware('is_admin');

Route::get('/slider-delete', [bannersManagementController::class, 'destroy'])->name('admin.slider.delete')->middleware('is_admin');



#$function=[InstagramController::class, 'feed'];
Route::get('/instagram', [
    'name' => 'Instagram Feed',
    'as' => 'app.instagram.feed',
    'uses' => 'App\Http\Controllers\InstagramController@feed',
]);

