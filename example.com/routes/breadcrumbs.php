<?php
/**
 * Created by PhpStorm.
 * User: mwalima
 * Date: 20-6-17
 * Time: 9:46
 */
// Home
Breadcrumbs::register('welcome', function($breadcrumbs) {
    $breadcrumbs->push('welcome', route('welcome'));
});

Breadcrumbs::register('page', function ($breadcrumbs, $page) {

        $breadcrumbs->parent('welcome');
    //dd($page[0]);
        foreach ($page as $ancestor) {

            $breadcrumbs->push($ancestor,$ancestor);
        }

    });
