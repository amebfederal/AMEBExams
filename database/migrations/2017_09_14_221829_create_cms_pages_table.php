<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCmsPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cms_pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->string('file', 100);
            $table->enum('visible', ['visibility', 'hidden'])->index();
            $table->enum('status', ['active', 'in_active'])->index();
            $table->enum('display_on_menu',['yes','no'])->index();
            $table->integer('menu_position')->unsigned(10);
            $table->bigInteger('parent_page_id')->unsigned()->index();
            $table->foreign('parent_page_id')->references('id')->on('cms_parent_pages');
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
        Schema::dropIfExists('cms_pages');
    }
}
