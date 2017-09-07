<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->string('image', 100);

            $table->bigInteger('product_category_id')->unsigned()->index();
            $table->foreign('product_category_id')->references('id')->on('categories');

            $table->bigInteger('sub_category_id')->unsigned()->index();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');

            $table->bigInteger('grade_id')->unsigned()->index();
            $table->foreign('grade_id')->references('id')->on('grades');

            $table->unsignedInteger('exam_duration')->comment('In Seconds');
            $table->double('default_price', 15, 2);
            $table->unsignedInteger('expiry_months')->comment('In Months');
            $table->enum('marking_type', ['computer', 'manual'])->index(); // Computer Marked / Manually marked
            $table->enum('certificate_type', ['e-certificate', 'hard_copy'])->index(); // E-Certificate / Hard Copy
            $table->enum('exam_type', ['online', 'offline'])->index(); // Online / Offline
            $table->string('online_key', 100);
            $table->enum('pricing_policy', ['default', 'state'])->index(); // Default / State
            $table->date('created_date');
            $table->date('last_updated_date');
            $table->string('last_updated_by',200);
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
        Schema::dropIfExists('products');
    }
}
