<?php
/**
 * Created by PhpStorm.
 * User: mpthuispc
 * Date: 9-4-18
 * Time: 12:43
 */

namespace App\Http\Controllers;

use App\Users;
use Illuminate\Http\Request;

class UserController
{

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function insertUser(Request $request){

        $users = new Users;
        $users->created_at;
        $users->name;
        $users->email;
        $users->street;
        $users->housenumber;
        $users->city;
        $users->zipcode;

        $users->save();
    }


    public function getUserCredentials(Request $request)
    {
        //getuser cred. from db

        $createdat = $request->get('created_at');
        $name = $request->get('name');
        $email = $request->get('email');
        $street =$request->get('street');;
        $housenumber = $request->get('housenumber');
        $city= $request->get('city');
        $postalcode= $request->get('zipcode');

        return view('/users', compact('name', 'email', 'created_at','street','housenumber','city','zipcode'));
    }
}
