<?php

use App\Http\Controllers\RestaurentController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/contact-us', function (){
    return view('contact');
});

Route::get('/about-us', function(){
    return view('about');
});

Route::get('/shop', function(){
    return view('shop');
});

Route::get('/product', [ProductController::class, 'getProductsView']);
