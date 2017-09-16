<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses',function(Blueprint $table){
            //
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('subject_code', 100)->unique();
            $table->string('image', 100)->unique();
            $table->text('description');
            $table->bigInteger('category_id')->unsigned()->index();
            $table->bigInteger('sub_category_id')->unsigned()->index();
            $table->bigInteger('grade_id')->unsigned()->index();
            $table->double('default_price', 15,2)->unique();
            $table->string('rising_software_key', 100)->unique();
            $table->enum('state_price', ['default', 'state'])->index();
            $table->enum('visibility', ['visible', 'not_visible'])->index();
            $table->enum('status', ['active', 'in_active'])->index();
            $table->enum('availiability_state', ['available', 'not_available'])->index();
            $table->bigInteger('last_updated_by')->unsigned()->index()->nullable();
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            $table->foreign('grade_id')->references('id')->on('grades');
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
        Schema::table('courses', function (Blueprint $table) {
            //
        });
    }
}
