<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBannerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title',100);
            $table->text('description')->nullable();
            $table->string('image',100);
            $table->integer('position')->unsigned(10);
            $table->enum('status', ['active', 'in_active'])->index();
            $table->enum('visibility', ['visible', 'not_visible'])->index();
            $table->enum('button_status', ['active', 'in_active'])->index();
            $table->string('button_text', 100)->nullable();
            $table->string('button_link', 100)->nullable();
            $table->enum('button_target', ['parent', 'newtab'])->index();
            $table->enum('second_button_status', ['active', 'in_active'])->index();
            $table->string('second_button_text', 100)->nullable();
            $table->string('second_button_link', 100)->nullable();
            $table->enum('second_button_target', ['parent', 'newtab'])->index();
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
        Schema::dropIfExists('banners');
    }
}
