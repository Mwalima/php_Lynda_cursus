<?php
use Illuminate\Support\Facades\Route;

function getCrumbs($page = '')
{

    $currentPath = Route::getFacadeRoot()->current()->uri();
    ($page = $currentPath);
//    $pageArr = explode('/',$page);
//    $page = $pageArr;

    return Breadcrumbs::render('crums', $page);
}