<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessionVenueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('session_venue',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('venue_id')->unsigned()->index();
            $table->foreign('venue_id')->references('id')->on('venues');
            $table->bigInteger('session_id')->unsigned()->index();
            $table->foreign('session_id')->references('id')->on('sessions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('session_venue');
    }
}
