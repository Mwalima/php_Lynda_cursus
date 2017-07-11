<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{

    public function index(Post $post){

       return $post->get();

       return view('pages.posts');

    }

    public function show(Request $request){

        dd($request);


    }

    public function store(){

        dd($request);


    }
}
