<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_categories', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->string('image', 100);

            $table->bigInteger('category_id')->unsigned()->index();
            $table->foreign('category_id')->references('id')->on('categories');

            $table->enum('visibility', ['visible', 'not_visible'])->index();
            $table->enum('status', ['active', 'in_active'])->index();
            $table->enum('availability', ['available', 'not_available'])->index();

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
        Schema::drop('sub_categories');
    }
}
