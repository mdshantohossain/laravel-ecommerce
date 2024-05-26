<?php

use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\Website\AuthController;
use App\Http\Controllers\Website\CartController;
use App\Http\Controllers\Website\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WishlistController;
use App\Http\Controllers\Website\BlogController;
use App\Http\Controllers\Website\ProductController;
use App\Http\Controllers\OrderController;

// admin controllers
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\UnitController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;


Route::get('/', [EcommerceController::class, 'index'])->name('home');
Route::get('/about', [EcommerceController::class, 'about'])->name('about');
Route::get('/contact', [EcommerceController::class, 'contact'])->name('contact');
Route::get('/privacy', [EcommerceController::class, 'privacy'])->name('privacy');
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');


Route::get('/category-product/{name}', [ProductController::class, 'categoryProduct'])->name('category.product');
Route::get('/sub-category-product/{name}', [ProductController::class, 'subCategoryProduct'])->name('sub-category.product');
Route::get('/product-detail/{slug}', [ProductController::class, 'productDetail'])->name('product.detail');

// product cart route
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart-add/{id}', [CartController::class, 'add'])->name('card.add');
Route::post('/cart-update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/remove-item/{id}', [CartController::class, 'remove'])->name('cart.remove.item');

// order place route
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::post('/order-place', [OrderController::class, 'index'])->name('order.place');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');


Route::get('/blogs', [BlogController::class, 'index'])->name('blogs');
Route::get('/blog-detail', [BlogController::class, 'detail'])->name('blog.detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

});
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('/category', CategoryController::class);
Route::resource('/sub-category', SubCategoryController::class);
Route::resource('/unit', UnitController::class);
Route::resource('/brand', BrandController::class);
Route::resource('/product', AdminProductController::class);
