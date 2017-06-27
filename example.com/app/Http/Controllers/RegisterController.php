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
        echo '<table><tr>';
        for ($i = 1; $i <= 10; $i++) {
            echo "<td>$i * $number = " . $i * $number . "</td></tr>";
        }
        echo "</table>";
    }

}



