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
    Route::group(['middleware'=>['LoggedMiddleware']], function(){
        Route::get('/', function(){
            return view('signin')->with('msg','');
        });
        Route::post('/','UserController@signin')->name('user.signin');
        Route::get('/regis', function(){
            return view('signup')->with('msg','');
        });
        Route::post('/regis','UserController@regis')->name('user.signup');
        Route::get('/kurir_regis',function(){
            return view('kurir.signup')->with('msg','');
        });
        Route::post('/kurir_regis','KurirController@store')->name('kurir.signup');
    });

    Route::group(['middleware'=>['LoginMiddleware']], function(){
        Route::get("dashboard", "DashboardController@index")->name("dashboard.index");
        Route::get("/check","DashboardController@check")->name("check");
        Route::get("logout","Logout@logout")->name("logout");
        Route::get('master/store','StoreController@index')->name('store.index');
        Route::get("home","PesananController@home")->name("home");
        Route::get("home_kurir","KurirController@home")->name("kurir");

    Route::get('/user','UserController@index')->name('user.index');
    Route::get('/user/add', 'UserController@add')->name('user.add');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::get('/user/update/{id}','UserConroller@update')->name('user.update');
    Route::get('/user/delete/{id}', 'UserController@delete')->name('user.delete');
    Route::get('/kurir','KurirController@index')->name('kurir.index');
    Route::get('/home-kurir','KurirController@home')->name('kurir.home');
    Route::get('/kurir/edit/{id}','KurirController@edit')->name('kurir.edit');
    Route::post('/kurir/update/{id}','KurirController@update')->name('kurir.update');
    Route::get('/kurir/delete/{id}', 'KurirController@delete')->name('kurir.delete');
    Route::get('/produk','ProdukController@index')->name('produk.index');
    Route::get('/produk/add','ProdukController@add')->name('produk.add');
    Route::get('/produk/edit/{id}','ProdukController@edit')->name('produk.edit');
    Route::post('/produk/update/{id}','ProdukController@update')->name('produk.update');
    Route::get('/produk/delete/{id}','ProdukController@delete')->name('produk.delete');
    Route::post('/produk/store','ProdukController@store')->name('produk.store');
    Route::get('/pesanan/add/{id}','PesananController@pesan')->name('pesanan.add');
    Route::get('/pesanan_index','PesananController@index')->name('pesanan.index');
    Route::post('/pesanan_create','PesananController@create')->name('pesanan.create');
});

