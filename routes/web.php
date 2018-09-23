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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/todos','todoController@todos');
Route::post('/create/todo','todoController@store');
Route::get('/todo/delete/{id}','todoController@delete');
Route::get('/todo/myedit/{id}','todoController@myUpdate');
Route::post('/todo/save/{id}','todoController@mysavemethod');
Route::get('/todo/completed/{id}','todoController@completed');
Route::get('/todo/test',function(){
    return view('test');
});
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/create/posts',[
        'uses' => 'PostsController@create',
        'as'=>'post.create'
    ]);
    Route::post('/store/posts',[
        'uses'=> 'PostsController@store',
        'as' => 'post.store'
    ]);

    Route::get('/create/category',[
        'uses' => 'CategoriesController@create',
        'as' => 'category.create'
    ]);

    Route::post('/store/category',[
        'uses' => 'CategoriesController@store',
        'as' => 'category.store'
    ]);
    Route::get('/show/category',[
        'uses' => 'Categoriescontroller@index',
        'as'=> 'category.index'
    ]);
});


