<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 20-6-17
 * Time: 9:46
 */
// Home
//Breadcrumbs::register('crums', function ($breadcrumbs, $page) {
//    foreach ($page as $k => $v) {
//        $breadcrumbs->push($k, $v);
//    }
//});
//
Breadcrumbs::register('crums', function($breadcrumbs, $page) {
    dd($page);
    $breadcrumbs->parent('crums');
    $breadcrumbs->push($page->title, route('crums', $page->id));
});