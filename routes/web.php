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

Route::group(['prefix'=>'admin'], function(){
    Route::get('home',[
        'uses' => 'Ad_HomeController@getAdminIndex',
        'as' => 'home'
    ]);
    //Category List
    Route::get('category-list',[
        'uses' => 'Ad_CategoryController@getCategoryList',
        'as' => 'cateList'
    ]);
    //Edit Category
    Route::get('edit-category',[
        'uses' => 'Ad_CategoryController@getEditCategory',
        'as' => 'editCate'
    ]);

});

