<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;
use App\User;
use App\Http\Controllers\Auth;



class RegisterController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRegister()
    {
        return view('register');
    }

    public function create($number = 2)
    {
        echo '<table><tr>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>$i * $number = " . $i * $number . "</td></tr>";
        }
        echo "</table>";
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id){

        $register = Registration::find($id);

        return view('register');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getUsersById(Request $request){

        $id = $request->input('id');

        $users = User::find($id);

        return view('test', compact('users'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function logOutUser(){

       //$user = User::logout();

        return view('pages.logout');
    }

}



