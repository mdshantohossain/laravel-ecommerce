<?php

use Illuminate\Support\Facades\Route;

    // website controllers
use App\Http\Controllers\website\EcommerceController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\Website\WishlistController;
use App\Http\Controllers\Website\SearchController;
use App\Http\Controllers\Website\AjaxController;

    // admin controllers
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\OrderController;

    // auth controllers
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ProfileController;


Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/about', [EcommerceController::class, 'about'])->name('about');
Route::get('/contact', [EcommerceController::class, 'contact'])->name('contact');
Route::get('/privacy', [EcommerceController::class, 'privacy'])->name('privacy');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');


Route::get('/category-product/{slug}', [ProductController::class, 'categoryProduct'])->name('category.product');
Route::get('/all-products', [ProductController::class, 'allProducts'])->name('all-products');
Route::get('/sub-category-product/{name}', [ProductController::class, 'subCategoryProduct'])->name('sub-category.product');
Route::get('/search-products', [SearchController::class, 'index'])->name('search.products');
Route::get('/product-detail/{slug}', [ProductController::class, 'productDetail'])->name('product.detail');

    // product cart route
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart-add/{id}', [CartController::class, 'add'])->name('card.add');
Route::post('/cart-update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove-item/{id}', [CartController::class, 'remove'])->name('cart.remove.item');

    // order place route
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/order-place', [OrderController::class, 'index'])->name('order.place');
    // auth route
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile-update', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'signIn'])->name('login.request');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'signUp'])->name('register.request');
Route::get('/verify-email/{token}', [AuthController::class, 'verify'])->name('verify.email');

    // forgot password route
Route::get('/forgot-password', [ForgotPasswordController::class, 'index'])->name('forgot.password');
Route::post('/forgot-password', [ForgotPasswordController::class, 'forgetPasswordRequest'])->name('forgot.password.request');
Route::get('/forgot-password/success', [ForgotPasswordController::class, 'forgetPasswordSuccess'])->name('forgot.password.success');
Route::get('/reset-password/{token}', [ForgotPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password-request/{token}', [ForgotPasswordController::class, 'passwordResetRequest'])->name('reset.password.request');

   // socialite route
Route::get('/google/redirect', [SocialiteController::class, 'googleRedirect'])->name('google.redirect');
Route::get('/google/callback', [SocialiteController::class, 'googleCallback'])->name('google.callback');
Route::get('/facebook/redirect', [SocialiteController::class, 'facebookRedirect'])->name('facebook.redirect');
Route::get('/facebook/callback', [SocialiteController::class, 'facebookCallback'])->name('facebook.callback');


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-detail', [BlogController::class, 'detail'])->name('blog.detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('category', CategoryController::class);
    Route::resource('sub-category', SubCategoryController::class);
    Route::resource('unit', UnitController::class);
    Route::resource('brand', BrandController::class);
    Route::resource('product', AdminProductController::class);
    Route::get('/all-orders', [OrderController::class, 'allOrders'])->name('all.orders');
    Route::get('/order-detail/{slug}', [OrderController::class, 'detail'])->name('order.detail');
    Route::get('/download-invoice/{slug}', [OrderController::class, 'download'])->name('download.invoice');
    Route::get('/order-edit/{slug}', [OrderController::class, 'edit'])->name('order.edit');
    Route::post('/order-update/{slug}', [OrderController::class, 'update'])->name('order.update');
    Route::get('/order-delete/{slug}', [OrderController::class, 'delete'])->name('order.delete');


    // ajax route
Route::get('/cart-product-add-by-ajax', [AjaxController::class, 'cartProductAddByAjax'])->name('product.add-cart.by.ajax');
Route::get('/product-add-wishlist-by-ajax', [AjaxController::class, 'wishlistAdd'])->name('wishlist-add.by.ajax');
Route::get('/username-check-bia-ajax', [AjaxController::class, 'usernameCheck']);
Route::get('/username-check-bia-ajax', [AjaxController::class, 'usernameCheck']);
Route::get('/get-cart-product', [AjaxController::class, 'getCartProduct']);



