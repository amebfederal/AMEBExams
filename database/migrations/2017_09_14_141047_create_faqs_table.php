<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFaqsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faqs', function (Blueprint $table) {

            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->enum('status', ['active', 'in_active'])->index();
            $table->bigInteger('faq_category_id')->unsigned()->index();
            $table->foreign('faq_category_id')->references('id')->on('faq_categories');
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
        Schema::dropIfExists('faqs');
    }
}
