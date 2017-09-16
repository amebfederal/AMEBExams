<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('code', 100);

            $table->bigInteger('sub_category_id')->unsigned()->index();
            $table->foreign('sub_category_id')->references('id')->on('categories');

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
        Schema::drop('grades');
    }
}
