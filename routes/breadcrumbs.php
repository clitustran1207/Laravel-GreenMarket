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
//Home > List Product > Add Product
Breadcrumbs::register('add_product', function ($breadcrumbs){
    $breadcrumbs->parent('product_list');
    $breadcrumbs->push('Add Product', route('addPro'));
});
//Home > Edit Product
Breadcrumbs::register('edit_product', function ($breadcrumbs){
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Edit Product', route('editPro'));
});
?>