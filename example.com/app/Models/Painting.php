<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Painting extends Model {

    /**
     * the associated table with the database
     * @var string
     */
    protected $table = 'paintings';

    public function fetchAllPaintings(){
        $paintings = Painting::all();


        foreach ($paintings as $painting){
            echo $painting->title;
        }
    }
}