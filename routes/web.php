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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


// ----------------------Front End Routes starts----------------------//

Route::get('/','FrontendController@home')->name('home');

// ----------------------Front-End Routes ends----------------------//



// ----------------------Back-End Routes starts----------------------//

Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/','HomeController@admin')->name('admin');
    // Category section
    Route::resource('/category','CategoryController');
    // Posts section
    Route::resource('/post','PostController');
    Route::post('category/{id}/child','CategoryController@getChildByParent');

    // Tab section
    Route::resource('/tab','TabController');
    // Type Section
    Route::resource('/type','TypeController');
});

// ----------------------Back End Routes ends----------------------//