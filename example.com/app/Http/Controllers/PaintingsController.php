<?php

namespace App\Http\Controllers;

use App\Painting;
use Illuminate\Http\Request;

class PaintingsController extends Controller
{
    public function index()
    {
        $painting = new Painting();
        return $painting->fetchAllPaintings();
    }

    public function jasonOutput()
    {
        $paintings = \App\Painting::all();


//        foreach ($paintings as $painting) {
            $painting = json_decode($paintings);

            return view("paintings")->with(array('paintings'=>$painting));
//        }
    }
}
