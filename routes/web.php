<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('main');
});

Route::get('/', function () {
    return view('brands');
})->name('brendd');
*/

Route::group(['middleware'=>'notLogin'], function(){

    Route::get('/registration', function () {
        return view('registration');
    })->name('registrationn');

    Route::post('/reginsert', 'App\Http\Controllers\userController@reginsert')->name('routeuinsert');


    Route::get('/login', function () {
        return view('login');
    })->name('loginn');

    Route::post('/loginsert', 'App\Http\Controllers\userController@loginsert')->name('routeinlogin');

});




Route::group(['middleware'=>'isLogin'], function(){

    Route::get('/profile', 'App\Http\Controllers\profileController@index')->name('profile');
    Route::post('/profinsert', 'App\Http\Controllers\profileController@profinsert')->name('profinsert');

    Route::post('/oinsert', 'App\Http\Controllers\ordersController@oinsert')->name('routeoinsert');
    Route::get('/', 'App\Http\Controllers\ordersController@olist')->name('orderss');
    Route::get('/odelete/{id}', 'App\Http\Controllers\ordersController@odelete')->name('odelete');
    Route::get('/odelete2/{id}', 'App\Http\Controllers\ordersController@odelete2')->name('odelete2');
    Route::get('/oedit/{id}', 'App\Http\Controllers\ordersController@oedit')->name('oedit');
    Route::post('/oupdate', 'App\Http\Controllers\ordersController@oupdate')->name('oupdate');
    Route::get('/tesdiq/{id}', 'App\Http\Controllers\ordersController@tesdiq')->name('tesdiq');
    Route::get('/legv/{id}', 'App\Http\Controllers\ordersController@legv')->name('legv');


    Route::post('/pinsert', 'App\Http\Controllers\productsController@pinsert')->name('routepinsert');
    Route::get('/prodcuts', 'App\Http\Controllers\productsController@plist')->name('productess');
    Route::get('/pdelete/{id}', 'App\Http\Controllers\productsController@pdelete')->name('pdelete');
    Route::get('/pdelete2/{id}', 'App\Http\Controllers\productsController@pdelete2')->name('pdelete2');
    Route::get('/pedit/{id}', 'App\Http\Controllers\productsController@pedit')->name('pedit');
    Route::post('/pupdate', 'App\Http\Controllers\productsController@pupdate')->name('pupdate');


    Route::post('/cinsert', 'App\Http\Controllers\clientsController@cinsert')->name('routecinsert');
    Route::get('/clients', 'App\Http\Controllers\clientscontroller@clist')->name('klientss');
    Route::get('/cdelete/{id}', 'App\Http\Controllers\clientsController@cdelete')->name('cdelete');
    Route::get('/cdelete2/{id}', 'App\Http\Controllers\clientsController@cdelete2')->name('cdelete2');
    Route::get('/cedit/{id}', 'App\Http\Controllers\clientsController@cedit')->name('cedit');
    Route::post('/cupdate', 'App\Http\Controllers\clientsController@cupdate')->name('cupdate');


    Route::post('/binsert', 'App\Http\Controllers\brandsController@binsert')->name('routebinsert');
    Route::get('/brands', 'App\Http\Controllers\brandsController@blist')->name('brendd');
    Route::get('/bdelete/{id}', 'App\Http\Controllers\brandsController@bdelete')->name('bdelete');
    Route::get('/bdelete2/{id}', 'App\Http\Controllers\brandsController@bdelete2')->name('bdelete2');
    Route::get('/bedit/{id}', 'App\Http\Controllers\brandsController@bedit')->name('bedit');
    Route::post('/bupdate', 'App\Http\Controllers\brandsController@bupdate')->name('bupdate');


    Route::post('/xinsert', 'App\Http\Controllers\xercController@xinsert')->name('routexinsert');
    Route::get('/xerc', 'App\Http\Controllers\xercController@xlist')->name('xarcc');
    Route::get('/xdelete/{id}', 'App\Http\Controllers\xercController@xdelete')->name('xdelete');
    Route::get('/xdelete2/{id}', 'App\Http\Controllers\xercController@xdelete2')->name('xdelete2');
    Route::get('/xedit/{id}', 'App\Http\Controllers\xercController@xedit')->name('xedit');
    Route::post('/xupdate', 'App\Http\Controllers\xercController@xupdate')->name('xupdate');

    Route::get('/logout', 'App\Http\Controllers\userController@logout')->name('logout');

});












