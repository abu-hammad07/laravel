<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductModelController;


Route::get('/', function () {
    return view('Home');
});


Route::get('/contact-us', function (){
    return view('Contact');
});

Route::get('/about-us', function(){
    return view('About');
});

Route::get('/shop', function(){
    return view('Shop');
});

Route::get('/view-product', [ProductController::class, 'getProductView'])->name('view-product');

Route::post('/addProduct', [ProductController::class, 'store']);

Route::get('submitProduct', function(){
    return view('addProduct');
});

Route::get('/singalProduct/{id}', [ProductController::class, 'singal'])->name('singalProduct');

Route::get('/editProduct/{id}', [ProductController::class, 'edit'])->name('editProduct');
Route::put('/updateProduct/{id}', [ProductController::class,'update'])->name('updateProduct');

Route::delete('/editProduct/{id}', [ProductController::class,'destroy'])->name('deleteProduct');


// Dashboard Routes
Route::get('/admin-dashboard', function(){
    return view('admin/DashboardHome');
});
// Route::get('/add-product', function(){
//     return view('admin/AddProduct');
// });
// Route::get('/view-product', function(){
//     return view('admin/ProductDetails');
// });


// Model Routes
Route::get('/modelProducts', [ProductModelController::class, 'index'])->name('products.index');
