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

Route::post('/subscribe', function () {
    $email = request('email');
    Newsletter::subscribe($email);
    return redirect()->back();
});

Route::get('/goods', [
    'uses' => 'FrontendController@goods',
    'as' => 'frontend.goods'
]);

Route::get('/', [
    'uses' => 'FrontendController@index',
    'as' => 'frontend.index'
]);

Auth::routes();

Route::get('/admin/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth','prefix' => 'admin'], function () {
    Route::get('/product/create',[
        'uses' => 'ProductController@create',
        'as' => 'product.create'
    ]);

    Route::post('/product/store', [
        'uses' => 'ProductController@store',
        'as' => 'product.store'
    ]);

    Route::get('/product/index', [
        'uses' => 'ProductController@index',
        'as' => 'product.index'
    ]);

    Route::get('/product/edit/{id}', [
        'uses' => 'ProductController@edit',
        'as' => 'product.edit'
    ]);

    Route::put('/product/update/{id}', [
        'uses' => 'ProductController@update',
        'as' => 'product.update'
    ]);

    Route::get('/product/delete/{id}', [
        'uses' => 'ProductController@destroy',
        'as' => 'product.delete'
    ]);

    Route::get('/message/index', [
        'uses' => 'FrontendController@message_index',
        'as' => 'message.index'
    ]);

});

Route::get('/donate', function () {
    return view('donate');
});

Route::post('/donate/store', [
    'uses' => 'FrontendController@store',
    'as' => 'frontend.store'
]);

Route::post('/message', [
    'uses' => 'FrontendController@message',
    'as' => 'frontend.message'
]);
