<?php

namespace App\Http\Controllers;

use App\Painting;
use Illuminate\Http\Request;

class PaintingsController extends Controller
{
    public function create()
    {
        return view('paint_form');
    }

    public function index(){
        $painting = new Painting();
        return $painting->fetchAllPaintings();
    }
}
