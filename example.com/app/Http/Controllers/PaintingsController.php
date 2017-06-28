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

        return view("paintings")->with(['paintings'=>$paintings]);

    }
}
