<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineExaminationStatePriceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_examination_state_price', function($table){
            $table->bigIncrements('id');

            $table->bigInteger('online_examination_id')->unsigned()->index();
            $table->foreign('online_examination_id')->references('id')->on('online_examinations');
            
            $table->bigInteger('state_id')->unsigned()->index();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('last_updated_by')->unsigned()->index();
            $table->foreign('last_updated_by')->references('id')->on('users');
            
            $table->double('price', 15, 2);

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
        Schema::drop('online_examination_state_price');
    }
}
