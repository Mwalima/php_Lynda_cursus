<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteCollection;
use PhpParser\Node\Scalar\MagicConst\Dir;


class LoginCheckController extends  Controller{


    public function checkUser(Request $request){

        $name = $request->input('username');

        return view('test', compact('name'));
    }
}