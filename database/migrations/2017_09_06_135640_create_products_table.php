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
        Schema::create('online_examinations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 100);
            $table->string('slug', 100);
            $table->string('subject_code', 100)->unique();
            $table->string('image', 100);
            $table->text('description');

            $table->unsignedInteger('expiry_months')->comment('In Months');
            $table->date('expiry_date')->comment('Should be calculated from expiry_months');

            $table->enum('renewable_fee_type', ['default', 'custom', 'non-renewable'])->index();
            $table->double('renewable_fee', 15, 2);

            $table->bigInteger('sub_category_id')->unsigned()->index();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');

            $table->bigInteger('grade_id')->unsigned()->index();
            $table->foreign('grade_id')->references('id')->on('grades');

            $table->unsignedInteger('exam_duration')->comment('In Minutes');

            $table->enum('marking_type', ['manual', 'automated-marking'])->index()->default('automated-marking'); // Computer Marked / Manually marked
            $table->enum('is_manual_marking', ['yes', 'no']);

            $table->string('certificate_type', 255)->index();
            $table->enum('exam_type', ['online', 'offline'])->index();
            $table->string('rising_software_key', 255);

            $table->double('default_price', 15, 2);

            $table->enum('pricing_policy', ['default', 'state'])->index(); // Default / State

            $table->string('last_updated_by',200);
            $table->bigInteger('last_updated_by_user')->unsigned()->index();
            $table->foreign('last_updated_by_user')->references('id')->on('users');

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
