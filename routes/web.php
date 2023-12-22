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

Route::get('admin/login', [\App\Http\Controllers\AdminController::class, 'show'])->name('admin.loginShow');

Route::post('admin/login', [\App\Http\Controllers\AdminController::class, 'loginProcess'])->name('admin.loginProcess');

Route::get('admin/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');

Route::get('admin/forgot', function () {
    return view('admin.forgot');
});

Route::middleware('adminMiddleware')->prefix('/product')->group(function() {
    Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index'])->name('product.product');
    Route::get('/add_product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.addProduct');
    Route::post('/add_product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
    Route::get('/{product}/editProduct', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.editProduct');
    Route::put('/{product}/editProduct', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
    Route::get('/showDetail/{configurationId}', [\App\Http\Controllers\ProductController::class, 'showDetail'])->name('product.showDetail');
    Route::delete('/{product}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
});

Route::middleware('adminMiddleware')->prefix('/specifications')->group(function() {
Route::post('product/add-specification/{configurationId}', [\App\Http\Controllers\SpecificationController::class, 'addSpecification'])->name('product.add-specification');
Route::put('/specifications/{id}', [\App\Http\Controllers\SpecificationController::class, 'update'])->name('specification.update');
Route::delete('/specifications/{id}', [\App\Http\Controllers\SpecificationController::class, 'destroy'])->name('specification.destroy');
});

Route::middleware('adminMiddleware')->prefix('/config')->group(function() {
    Route::get('/addConfig', [\App\Http\Controllers\ConfigurationController::class, 'create'])->name('config.addConfig');
    Route::post('/addConfig', [\App\Http\Controllers\ConfigurationController::class, 'store'])->name('config.store');
    Route::put('/configurations/{id}', [\App\Http\Controllers\ConfigurationController::class, 'update'])->name('config.update');
    Route::delete('{configuration}', [\App\Http\Controllers\ConfigurationController::class, 'destroy'])->name('config.destroy');
});


Route::get('admin/header', function () {
    return view('admin.header');
});
Route::get('/admin/order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order.order');
Route::get('order/{order_id}/order-detail', [\App\Http\Controllers\OrderController::class, 'detail'])->name('order.orderDetail');
Route::get('/confirm-order/{order_id}', [\App\Http\Controllers\OrderController::class, 'confirmOrder'])->name('order.confirmOrder');

Route::get('/admin/customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('admin.customer')->middleware('adminMiddleware');

Route::middleware('adminMiddleware')->prefix('/admin')->group(function (){
    Route::get('/index', [\App\Http\Controllers\ProductDetailController::class, 'index'])->name('admin.index');
    Route::get('/member', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.member');
    Route::get('/addMember', [\App\Http\Controllers\AdminController::class, 'create'])->name('admin.addMember');
    Route::post('/addMember', [\App\Http\Controllers\AdminController::class, 'store'])->name('admin.store');
    Route::get('{admins}/editMember', [\App\Http\Controllers\AdminController::class, 'edit'])->name('admin.editMember');
    Route::put('{admins}/editMember', [\App\Http\Controllers\AdminController::class, 'update'])->name('admin.update');
    Route::delete('{admins}', [\App\Http\Controllers\AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::middleware('adminMiddleware')->prefix('/payment')->group(function (){
    Route::get('/payment-method', [\App\Http\Controllers\PaymentMethodController::class, 'index'])->name('payment.payment');
    Route::get('/add-payment-method', [\App\Http\Controllers\PaymentMethodController::class, 'create'])->name('payment.addPayment');
    Route::post('/add-payment-method', [\App\Http\Controllers\PaymentMethodController::class, 'store'])->name('payment.store');
    Route::get('/{payment_method}/editPayment', [\App\Http\Controllers\PaymentMethodController::class, 'edit'])->name('payment.editPayment');
    Route::put('/{payment_method}/editPayment', [\App\Http\Controllers\PaymentMethodController::class, 'update'])->name('payment.update');
    Route::delete('/{payment_method}', [\App\Http\Controllers\PaymentMethodController::class, 'destroy'])->name('payment.destroy');
});

Route::middleware('adminMiddleware')->prefix('/cate')->group(function (){
    Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('cate.categories');
    Route::get('/addCat', [\App\Http\Controllers\CategoryController::class, 'create'])->name('cate.addCat');
    Route::post('/addCat', [\App\Http\Controllers\CategoryController::class, 'store'])->name('cate.store');
    Route::get('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('cate.editCat');
    Route::put('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'update'])->name('cate.update');
    Route::delete('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('cate.destroy');
});

Route::middleware('adminMiddleware')->prefix('/cate')->group(function (){
    Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])->name('cate.categories');
    Route::get('/addCat', [\App\Http\Controllers\CategoryController::class, 'create'])->name('cate.addCat');
    Route::post('/addCat', [\App\Http\Controllers\CategoryController::class, 'store'])->name('cate.store');
    Route::get('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('cate.editCat');
    Route::put('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'update'])->name('cate.update');
    Route::delete('/{categories}/editCat', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('cate.destroy');
});

Route::middleware('adminMiddleware')->prefix('/brand')->group(function (){
    Route::get('/brand', [\App\Http\Controllers\BrandController::class, 'index'])->name('brand.brand');

    Route::get('/addbrand', [\App\Http\Controllers\BrandController::class, 'create'])->name('brand.addbrand');

    Route::post('/addbrand', [\App\Http\Controllers\BrandController::class, 'store'])->name('brand.store');

    Route::get('/{brands}/editbrand', [\App\Http\Controllers\BrandController::class, 'edit'])->name('brand.editbrand');

    Route::put('/{brands}/editbrand', [\App\Http\Controllers\BrandController::class, 'update'])->name('brand.update');

    Route::delete('/{brands}', [\App\Http\Controllers\BrandController::class, 'destroy'])->name('brand.destroy');
});

// User

Route::post('user/login-customer', [\App\Http\Controllers\CustomerController::class, 'LoginProcess'])->name('user.LoginProcess');
Route::get('user/logout-customer', [\App\Http\Controllers\CustomerController::class, 'logout'])->name('user.logout');

Route::prefix('/user')->group(function (){
    Route::get('/index', [\App\Http\Controllers\IndexController::class, 'index'])->name('user.c');
    Route::get('/{category}/fill', [\App\Http\Controllers\IndexController::class, 'laptop'])->name('user.laptop');
    Route::get('/danh-muc/{category}/thuong-hieu/{brand}', [\App\Http\Controllers\IndexController::class, 'getProductsByCategoryAndBrand'])
        ->name('user.access');
    Route::get('productDetail/{productId}/{configurationId}', [\App\Http\Controllers\IndexController::class, 'showProductDetail'])->name('user.productDetail');
    Route::get('/loginRegister', [\App\Http\Controllers\CustomerController::class, 'create'])->name('user.loginRegister');
    Route::post('/loginRegister', [\App\Http\Controllers\CustomerController::class, 'store'])->name('user.store');
});


Route::middleware(['customerMiddleware'])->prefix('/user')->group(function (){
Route::get('/add-to-cart/{product_id}/{configuration_id}', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('cart.add');
Route::get('/cart', [\App\Http\Controllers\CartController::class, 'viewCart'])->name('user.cart');
Route::get('/cart/remove/{index}', [\App\Http\Controllers\CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/update-cart', [\App\Http\Controllers\CartController::class, 'updateCart'])->name('cart.update');
Route::get('user/cart/clear', [\App\Http\Controllers\CartController::class, 'clearCart'])->name('cart.clear');
Route::post('/buy-now', [\App\Http\Controllers\CartController::class, 'buyNow'])->name('user.buyNow');

});

Route::middleware('customerMiddleware')->prefix('/user')->group(function (){
    Route::get('/my-account', [\App\Http\Controllers\CustomerController::class, 'showUserProfile'])->name('user.myAccount');
    Route::get('/edit-account', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('user.editAccount');
    Route::put('/update', [\App\Http\Controllers\CustomerController::class, 'update'])->name('user.update');
    Route::get('change-pass', [\App\Http\Controllers\CustomerController::class, 'showChangePasswordForm'])->name('user.changePass');
    Route::post('/change-password', [\App\Http\Controllers\CustomerController::class, 'changePassword'])->name('user.changePassword');
});
//Route::get('user/edit-account', function () {
//    return view('user.editAccount');
//});
//Route::get('user/change-pass', function () {
//    return view('user.changePass');
//});

Route::get('user/order/{order_id}/detail', [\App\Http\Controllers\CustomerController::class, 'showOrderDetail'])->name('user.showDetailOrder');
Route::get('/order/ship/{order_id}', [\App\Http\Controllers\OrderController::class, 'shipOrder'])->name('order.shipOrder');
Route::get('/order/confirm-shipping/{order_id}', [\App\Http\Controllers\OrderController::class, 'confirmShipping'])
    ->name('order.confirmShipping');
Route::get('/order/complete/{order_id}', [\App\Http\Controllers\CustomerController::class, 'complete'])
    ->name('order.complete');
Route::get('/order/cancel/{order_id}', [\App\Http\Controllers\CustomerController::class, 'cancel'])
    ->name('order.cancel');

Route::get('user/blog', function () {
    return view('user.blog');
});

Route::get('user/about', function () {
    return view('user.about');
});

Route::get('user/contact', function () {
    return view('user.contact');
});

