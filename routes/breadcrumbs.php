<?php

//Home
Breadcrumbs::register('home', function ($breadcrumbs){
    $breadcrumbs->push('Home', route('home'));
}); 
//Home > Extract File
Breadcrumbs::register('extractFileCategory', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Extract File Category', route('extractFileCate'));
});
//Home > Category List
Breadcrumbs::register('category_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Category List', route('cateList'));
});
//Home > List Product
Breadcrumbs::register('product_list', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Product List', route('proList'));
});
//Home > Product List > Add Product
Breadcrumbs::register('add_product', function ($breadcrumbs){
    $breadcrumbs->parent('product_list');
    $breadcrumbs->push('Add Product', route('addPro'));
});
//Home > Product List > Edit Product
Breadcrumbs::register('edit_product', function ($breadcrumbs,$product){
    $breadcrumbs->parent('product_list');
    $breadcrumbs->push('Edit '.$product->pro_name, route('editPro',$product->id));
});

//Home > Extract file Product
Breadcrumbs::register('file-product', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Extract File Product', route('extractFilePro'));
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
Breadcrumbs::register('order_detail', function ($breadcrumbs,$order){
    $breadcrumbs->parent('order_list');
    $breadcrumbs->push($order->fullname.' detail', route('orderDetail',$order->id));
});
//Home > Order List > Edit Order
Breadcrumbs::register('edit_order', function ($breadcrumbs,$order){
    $breadcrumbs->parent('order_list');
    $breadcrumbs->push('Edit '.$order->fullname.' order', route('editOrder',$order->id));
});


?>