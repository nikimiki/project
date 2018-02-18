<?php

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

Route::get('products', [
    'uses' => 'ProductsController@home',
    'as' => 'products'
]);
Route::get('product/{id}', 'ProductsController@productDetail');
Route::get('product-upload', 'ProductsController@upload');
Route::get('sepete-ekle/{id}', [
    'uses' => 'ProductsController@sepeteEkle',
    'as' => 'product.sepeteEkle'
]);
Route::get('sepetim', [
    'uses' => 'SepetController@home',
    'as' => 'sepetim'
]);
Route::get('sepet-urun-sil/{id}', [
    'uses' => 'SepetController@sepetUrunSil',
    'as' => 'sepetim.sepetUrunSil'
]);
Route::post('sepet-urun-guncelle/{id}', [
    'uses' => 'SepetController@sepetUrunGuncelle',
    'as' => 'sepetim.sepetGuncelle'
]);

Route::group(['middleware' => 'xml'], function() {
    Route::post('product-upload-send', 'ProductsController@productUploadSend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
