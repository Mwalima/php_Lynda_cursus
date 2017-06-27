<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaintings extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paintings', function($thePainting){
            $thePainting->increments('id');
            $thePainting->string('artist');
            $thePainting->string('title',500);
            $thePainting->text('description');
            $thePainting->integer('year');
            $thePainting->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('paintings');
    }
}
