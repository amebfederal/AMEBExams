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
        Schema::create('product_details', function (Blueprint $table) {
            $table->bigIncrements();
            $table->string('name', 100);
            $table->string('slug', 100);
            $table->text('description');
            $table->string('image', 100);

            $table->bigInteger('product_category_id')->unsigned()->index();
            $table->foreign('product_category_id')->references('id')->on('product_categories');

            $table->string('expiry_type', 100);
            $table->double('renew_fee', 15, 2);
            $table->string('grade', 100);

            $table->unsignedInteger('exam_duration')->comment('In Seconds');

            $table->enum('is_online', ['online', 'not_online'])->index(); // 1 for True 0 for False
            $table->string('online_key', 100);
            $table->double('default_price', 15, 2);
            $table->string('pricing_policy', 100);
            $table->enum('marking_type', ['computer', 'manual', 'both'])->index(); // Computer Marked / Manually marked / Both
            $table->string('certificate_type', 100);
            $table->enum('visibility', ['visible', 'not_visible'])->index();
            $table->enum('status', ['0', '1'])->index()->comment('0 Inactive, 1 Active'); // O for Inactive And 1 for Active
            $table->timestamp('added_date');
            $table->enum('purchase_type', ['individual', 'class','both'])->index(); // Individual, Class, Both
            $table->unsignedInteger('practise_exam_number')->default(1)->index();

            $table->string('course_id');

            $table->bigInteger('session');
            $table->string('subject_code', 100);
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
        Schema::dropIfExists('product_details');
    }
}
