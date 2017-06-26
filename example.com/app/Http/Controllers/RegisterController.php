<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteCollection;
use PhpParser\Node\Scalar\MagicConst\Dir;



class RegisterController extends Controller
{

    public function showRegister()
    {
        return view('register');
    }

    public function create($number = 2)
    {
        for ($i = 1; $i <= 10; $i++) {
            echo "$i * $number = " . $i * $number . "<br>";
        }
    }

    public function show($page = '')
    {
        $currentPath = Route::getFacadeRoot()->current()->uri();
        $page = $currentPath;
        return view('register', ['page' => $page]);
    }
}



