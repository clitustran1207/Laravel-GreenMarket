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

?>