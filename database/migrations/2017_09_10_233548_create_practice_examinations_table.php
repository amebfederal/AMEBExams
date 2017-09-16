<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePracticeExaminationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practice_examinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->bigInteger('exam_id')->unsigned()->index();
            $table->foreign('exam_id')->references('id')->on('online_examinations')
                ->onDelete('cascade')->onUpdate('no action');
            $table->string('image', 100);
            $table->text('description')->nullable();

            $table->unsignedInteger('expiry_months')->comment('In Months');
            $table->date('expiry_date')->comment('Should be calculated from expiry_months');

            $table->unsignedInteger('allowed_number')->index();
            $table->double('price', 15, 2);

            $table->string('last_updated_by',200);
            $table->integer('last_updated_by_user')->unsigned()->index();
            $table->foreign('last_updated_by_user')->references('id')->on('users');

            $table->enum('status', ['active', 'in-active'])->index();
            $table->enum('visibility', ['visible', 'not-visible'])->index();

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
        Schema::drop('practice_examinations');
    }
}
