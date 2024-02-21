<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\home;
use App\Http\Controllers\admin\LoginAdController;
use App\Http\Controllers\admin\OrderAdCotroller;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\user\Account;
use App\Http\Controllers\user\AccountController;
use App\Http\Controllers\user\CartController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\CategoryProductController;
use App\Http\Controllers\user\CheckOutController;
use App\Http\Controllers\user\MyOrderController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('/login',[LoginController::class, 'index']);
Route::post('/login',[LoginController::class, 'store'])->name('login');
Route::get('/logout',[LoginController::class, 'logout'])->name('logout');


Route::get('/loginad',[LoginAdController::class, 'index']);
Route::post('/loginad',[LoginAdController::class, 'store'])->name('loginad');



Route::get('/register',[RegisterController::class, 'index']);
Route::post('/register',[RegisterController::class, 'store'])->name('register');

Route::get('/admin/user', [UserController::class, 'index']) ->name('admin.user');
Route::get('/admin/user/add', [UserController::class, 'create']) ->name('admin.user.create');
Route::post('/admin/user/add', [UserController::class, 'store']) ->name('admin.user.add');
Route::get('/admin/user/edit/{id}', [UserController::class, 'edit']) ->name('admin.user.edit');
Route::put('/admin/user/edit/{id}', [UserController::class, 'update']) ->name('admin.user.update');
Route::delete('admin/user/delete/{id}', [UserController::class, 'destroy']);


Route::get('/detail/{id}',[HomeController::class, 'show'])->name('detail');

Route::get('/admin/category', [ProductController::class, 'index']) ->name('admin.products');
Route::get('/category/{category}', [CategoryProductController::class,'index'])->name('category.products');



Route::get('admin', function () {
    return view('admin.admin_home');
}) ->name('admin');

Route::get('/admin/home', [Home::class, 'index']) ->name('admin.home');

Route::get('/admin/products', [ProductController::class, 'index']) ->name('admin.products');
Route::get('/admin/products/add', [ProductController::class, 'create']) ->name('admin.products.create');
Route::post('/admin/products/add', [ProductController::class, 'store']) ->name('admin.products.add');
Route::get('/admin/products/edit/{id}', [ProductController::class, 'edit']) ->name('admin.products.edit');
Route::put('/admin/products/edit/{id}', [ProductController::class, 'update']) ->name('admin.products.update');
Route::delete('admin/products/delete/{id}', [ProductController::class, 'destroy']);

Route::get('/admin/category', [CategoryController::class, 'index']) ->name('admin.category');
Route::get('/admin/category/add', [CategoryController::class, 'create']) ->name('admin.category.create');
Route::post('/admin/category/add', [CategoryController::class, 'store']) ->name('admin.category.add');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit']) ->name('admin.category.edit');
Route::put('/admin/category/edit/{id}', [CategoryController::class, 'update']) ->name('admin.category.update');
Route::delete('admin/category/delete/{id}', [CategoryController::class, 'destroy']);

Route::get('/cart', [CartController::class, 'index']) ->name('cart');
Route::post('/add/cart', [CartController::class, 'store']) ->name('add.cart');

Route::get('/products/search',[ProductController::class, 'search'])->name('products.search');

Route::get('/checkout', [CheckOutController::class, 'index']) ->name('checkout');

Route::post('/order', [OrderController::class, 'store']) ->name('order');

Route::get('/admin/order', [OrderAdCotroller::class, 'index']) ->name('admin.order');
// Route::get('/admin/order/edit/{id}', [OrderAdCotroller::class, 'edit']) ->name('admin.order.edit');
// Route::put('/admin/order/edit/{id}', [OrderAdCotroller::class, 'update']) ->name('admin.order.update');
Route::get('/admin/order/show/{id}', [OrderAdCotroller::class, 'show']) ->name('admin.order.show');
Route::delete('admin/order/delete/{id}', [OrderAdCotroller::class, 'destroy']);

Route::get('/account', [AccountController::class, 'index']) ->name('account');

Route::get('/myorder', [MyOrderController::class, 'index']) ->name('myorder');