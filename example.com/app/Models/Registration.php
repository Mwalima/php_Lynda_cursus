<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Registration extends Model
{

    protected $table = 'users';
    protected $connection = 'mysql';
    protected $guarded = [];

    public static function insertUser($username, $email, $password)
    {
        $flight = new Registration();

        $flight->username = $username;
        $flight->email = $email;
        $flight->password = $password;

        $flight->save();
    }

    public static function getUsers()
    {
        return $accounts = DB::table('users')->get();
    }

}