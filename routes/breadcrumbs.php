<?php

//Home
Breadcrumbs::register('home', function ($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
}); 
//Home > List Category
Breadcrumbs::register('category_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Category List', route('cateList'));
});
//Home > Edit Category
Breadcrumbs::register('edit_category', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Edit Category', route('editCate'));
});
//Home > List Product
Breadcrumbs::register('product_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product List', route('proList'));
});
//Home > Edit Product > Add Product
Breadcrumbs::register('add_product', function ($breadcrumbs){
    $breadcrumbs->parent('edit_product');
    $breadcrumbs->push('Add Product', route('addPro'));
});
//Home > Edit Product
Breadcrumbs::register('edit_product', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Edit Product', route('editPro'));
});
//Home > List Customer
Breadcrumbs::register('customer_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Customer List', route('cusList'));
});
//Home > Edit Customer
Breadcrumbs::register('edit_customer', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Edit Customer', route('editCus'));
});
//Home > List User
Breadcrumbs::register('user_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Employee List', route('userList'));
});
//Home > Edit User
Breadcrumbs::register('edit_user', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Edit Employee', route('editUser'));
});
//Home > Order List
Breadcrumbs::register('order_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Order List', route('orderList'));
});
//Home > Order List > Order Detail
Breadcrumbs::register('order_detail', function ($breadcrumbs){
    $breadcrumbs->parent('order_list');
    $breadcrumbs->push('Order Detail', route('orderDetail'));
});

?>