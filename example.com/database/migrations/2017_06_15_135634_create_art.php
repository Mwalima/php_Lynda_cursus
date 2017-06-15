<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArt extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('art', function($newTable){
        $newTable->increments('id');
        $newTable->string('astist');
        $newTable->string('title',500);
        $newTable->text('description');
        $newTable->date('created');
        $newTable->date('exhibition_date');
        $newTable->timestamps();
    });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('art');
    }
}
