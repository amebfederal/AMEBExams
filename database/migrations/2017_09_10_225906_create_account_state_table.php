<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_state',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->bigInteger('account_id')->unsigned()->index();
            $table->foreign('account_id')->references('id')->on('account_holders');
            $table->bigInteger('state_id')->unsigned()->index();
            $table->foreign('state_id')->references('id')->on('states');
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
        Schema::dropIfExists('account_state');
    }
}
