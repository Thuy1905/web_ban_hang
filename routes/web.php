<?php

use App\Http\Controllers\PageController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('index',[
    PageController::class,'getIndex'
])->name('trang-chu');

Route::get('loai-san-pham/{type}',[
    PageController::class,'getLoaiSp'
])->name('loaisanpham');

Route::get('chi-tiet-san-pham/{id}',[
    PageController::class,'getChitiet'
])->name('chitietsanpham');

Route::get('lien-he',[
    PageController::class,'getLienhe'
])->name('lienhe');

Route::get('gioi-thieu',[
    PageController::class,'getGioithieu'
])->name('gioithieu');

Route::get('add-to-cart/{id}',[
    PageController::class,'getAddtoCart'
])->name('themgiohang');

Route::get('del-cart/{id}',[
    PageController::class,'getDelItemCart'
])->name('xoagiohang');

Route::get('dat-hang',[
    PageController::class,'getCheckout'
])->name('dathang');

Route::post('dat-hang',[
    PageController::class,'postCheckout'
])->name('dathang');

Route::get('dang-nhap',[
    PageController::class,'getLogin'
])->name('login');

Route::post('dang-nhap',[
    PageController::class,'postLogin'
])->name('login');

Route::get('dang-ki',[
    PageController::class,'getSignin'
])->name('signin');

Route::post('dang-ki',[
    PageController::class,'postSignin'
])->name('signin');

Route::get('dang-xuat',[
    PageController::class,'postLogout'
])->name('logout');

Route::get('search',[
    PageController::class,'getSearch'
])->name ('search');




