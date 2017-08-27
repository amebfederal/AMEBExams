<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ProductCategory', function (Blueprint $table) {
            $table->bigIncrements('CategoryId');
            $table->string('CategoryName', 100);
            $table->string('CategorySlug', 100);
            $table->text('CategoryDesc');
            $table->string('CategoryImage', 100);
            $table->enum('CategoryVisibility', ['visible', 'notvisible'])->index();
            $table->enum('CategoryStatus', ['0', '1'])->index(); // O for Inactive And 1 for Active
            $table->enum('CategoryAvailability', ['available', 'notavailable'])->index();

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
        Schema::dropIfExists('ProductCategory');
    }
}
