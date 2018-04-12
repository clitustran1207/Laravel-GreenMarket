<?php

Route::get('admin-login',[
    'uses'=>'LoginController@getAdminLogin',
    'as'=>'adminLogin'
]);
Route::post('admin-login',[
    'uses'=>'LoginController@postAdminLogin',
    'as'=>'adminLogin'
]);
Route::get('admin-register',[
    'uses'=>'RegisterController@getAdminRegister',
    'as'=>'adminRegister'
]);
Route::post('admin-register',[
    'uses'=>'RegisterController@postAdminRegister',
    'as'=>'adminRegister'
]);
Route::get('admin-logout',[
    'uses'=>'LoginController@getAdminLogout',
    'as'=>'adminLogout'
]);
Route::get('activate/{email}/{activationCode}','ActivationController@activate');

Route::group(['prefix'=>'admincp','middleware'=>'adminLogin'], function(){
    Route::get('/',[
        'uses' => 'Ad_HomeController@getAdminIndex',
        'as' => 'home'
    ]);
    //Extract file Category
    Route::get('file-category',[
        'uses' => 'Ad_CategoryController@getExtract',
        'as' => 'extractFileCate'
    ]);
    //Category List
    Route::get('category-list',[
        'uses' => 'Ad_CategoryController@getCategoryList',
        'as' => 'cateList'
    ]);
    Route::get('category-data',[
        'uses' => 'Ad_CategoryController@getData'
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
    //Order List
    Route::get('order-list',[
        'uses' => 'Ad_OrderController@getOrderList',
        'as' => 'orderList' 
    ]);
    //Order Detail
    Route::get('order-detail',[
        'uses' => 'Ad_OrderController@getOrderDetail',
        'as' => 'orderDetail' 
    ]);

});

