<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVenuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('venues',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('slug', 100);
            $table->string('location',200);
            $table->integer('seats')->unsigned();
            $table->enum('venue', ['private', 'group'])->index();
            $table->date('from');
            $table->date('till');
            $table->enum('status', ['active', 'in_active'])->index();
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
        Schema::dropIfExists('venues');
    }
}
