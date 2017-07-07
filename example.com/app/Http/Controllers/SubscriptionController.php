<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\RouteCollection;
use PhpParser\Node\Scalar\MagicConst\Dir;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;



class SubscriptionController extends Controller{


    public function setSubscription(Request $request)
    {
        $request->username = $request->input('username');
        $request->email =$request->input('email');
        $request->password = Hash::make($request->input('password'));

        Registration::insertUser($request->username,$request->email,$request->password);

        $accounts = Registration::getUsers();
        return view('thanks',compact('accounts'));
    }

}