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
    //Product List
    Route::get('product-list',[
        'uses' => 'Ad_ProductController@getProductList',
        'as' => 'proList'
    ]);
    //Add Product
    Route::get('add-product',[
        'uses' => 'Ad_ProductController@getAddProduct',
        'as' => 'addPro'
    ]);
    //Edit Product
    Route::get('edit-product',[
        'uses' => 'Ad_ProductController@getEditProduct',
        'as' => 'editPro'
    ]);
    //Customer List
    Route::get('customer-list',[
        'uses' => 'Ad_CustomerController@getCustomerList',
        'as' => 'cusList'
    ]);
    //Edit Customer
    Route::get('edit-customer',[
        'uses' => 'Ad_CustomerController@getEditCustomer',
        'as' => 'editCus'
    ]);
    //User List
    Route::get('user-list',[
        'uses' => 'Ad_UserController@getUserList',
        'as' => 'userList'
    ]);
    //Edit User
    Route::get('edit-user',[
        'uses' => 'Ad_UserController@getEditUser',
        'as' => 'editUser' 
    ]);

});

