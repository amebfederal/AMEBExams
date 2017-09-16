<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('states',function(Blueprint $table){
            $table->bigIncrements('id');
            $table->string('name',100);
            $table->string('slug', 100);
            $table->string('prefix',100);
            $table->string('notification_email',150);
            $table->string('contact_email',150);
            $table->bigInteger('phone')->unsigned();
            $table->string('address',100);
            $table->string('contact_person',100);
            $table->bigInteger('contact_person_phone')->unsigned();
            $table->string('contact_person_email',150);
            $table->enum('notification', ['enabled', 'disabled'])->index();
            $table->enum('authority', ['enabled', 'disabled'])->index();
            $table->string('api',200);
            $table->string('key',200);

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
        Schema::dropIfExists('states');
    }
}
