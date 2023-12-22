<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin/index', function () {
    return view('admin.index');
});

Route::get('admin/login', function () {
    return view('admin.login');
});

Route::get('admin/forgot', function () {
    return view('admin.forgot');
});

Route::prefix('/product')->group(function() {
    Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.product');
    Route::get('/add_product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.addProduct');
    Route::post('/add_product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}/editProduct', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.editProduct');
    Route::put('/{product}/editProduct', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::get('product/showDetail/{configurationId}', [\App\Http\Controllers\ProductController::class, 'showDetail'])->name('product.showDetail');
    Route::delete('/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
});

Route::post('product/add-specification/{configurationId}', [\App\Http\Controllers\SpecificationController::class, 'addSpecification'])->name('product.add-specification');
// Edit specification route
// routes/web.php
Route::put('/specifications/{id}', [\App\Http\Controllers\SpecificationController::class, 'update'])->name('specification.update');
Route::delete('/specifications/{id}', [\App\Http\Controllers\SpecificationController::class, 'destroy'])->name('specification.destroy');

Route::prefix('/config')->group(function() {
    Route::get('/addConfig', [\App\Http\Controllers\ConfigurationController::class, 'create'])->name('config.addConfig');
    Route::post('/addConfig', [\App\Http\Controllers\ConfigurationController::class, 'store'])->name('config.store');
});


Route::get('admin/member', function () {
    return view('admin.member');
});

Route::get('admin/header', function () {
    return view('admin.header');
});

Route::get('admin/AddMember', function () {
    return view('admin.addMember');
});
Route::get('admin/order', function () {
    return view('admin.order');
});

Route::get('product/showProduct', function () {
    return view('product.showDetail');
});

Route::prefix('/cate')->group(function (){
    Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('cate.categories');
    Route::get('/addCat', [\App\Http\Controllers\CategoryController::class, 'create'])->name('cate.addCat');
    Route::post('/addCat', [\App\Http\Controllers\CategoryController::class, 'store'])->name('cate.store');
    Route::get('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('cate.editCat');
    Route::put('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'update'])->name('cate.update');
    Route::delete('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('cate.destroy');
});

Route::prefix('/brand')->group(function (){
    Route::get('/brand', [\App\Http\Controllers\BrandController::class, 'index'])->name('brand.brand');

    Route::get('/addbrand', [\App\Http\Controllers\BrandController::class, 'create'])->name('brand.addbrand');

    Route::post('/addbrand', [\App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');

    Route::get('/{brands}/editbrand', [\App\Http\Controllers\BrandController::class, 'edit'])->name('brand.editbrand');

    Route::put('/{brands}/editbrand', [\App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');

    Route::delete('/{brands}', [\App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.destroy');
});

// User

Route::get('user/index', function () {
    return view('user.index');
});

Route::get('user/laptop', function () {
    return view('user.laptop');
});

Route::get('user/access', function () {
    return view('user.access');
});

Route::get('user/cart', function () {
    return view('user.cart');
});

Route::get('user/blog', function () {
    return view('user.blog');
});

Route::get('user/about', function () {
    return view('user.about');
});

Route::get('user/contact', function () {
    return view('user.contact');
});

Route::get('user/loginRegister', function () {
    return view('user.loginRegister');
});
