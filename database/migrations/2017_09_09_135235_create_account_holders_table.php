<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountHoldersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_holders',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->enum('role', ['teacher', 'parent','adult_learner','student'])->index();
            $table->string('fname',120);
            $table->string('lname',120);
            $table->string('email')->unique();
            $table->string('password');
            $table->bigInteger('phone')->unsigned();
            $table->bigInteger('o_phone')->unsigned()->nullable();
            $table->string('address',200);
            $table->string('alt_address',200)->nullable();
            $table->string('city',100);
            $table->string('suburb');
            $table->string('preference');
            $table->string('postcode');

            $table->bigInteger('state_id')->unsigned()->index()->nullable();
            $table->foreign('state_id')->references('id')->on('states');

            $table->integer('country_id')->unsigned()->index()->nullable();
            $table->foreign('country_id')->references('id')->on('countries');

            $table->string('school_name')->nullable();

            $table->enum('status', ['active', 'in_active'])->index();
            $table->rememberToken();
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
        Schema::drop('account_holders');
    }
}
