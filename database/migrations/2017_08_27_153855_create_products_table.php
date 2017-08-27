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
        Schema::create('ProductDetail', function (Blueprint $table) {
            $table->bigIncrements('ProductId');
            $table->string('ProductName', 100);
            $table->string('ProductSlug', 100);
            $table->text('ProductDescription');
            $table->string('ProductImage', 100);
            $table->bigInteger('ProductCategory')->index();
            $table->string('ProductExpiryType', 100);
            $table->string('ProductRenewFee', 100);
            $table->string('ProductGrade', 100);
            $table->unsignedInteger('ProductExamDuration');
            $table->enum('ProductIsOnline', ['0', '1'])->index(); // 1 for True 0 for False
            $table->string('ProductOnlineKey', 100);
            $table->string('ProductDefaultPrice', 100);
            $table->string('ProductPricingPolicy', 100);
            $table->enum('ProductMarkingType', ['computer', 'manual','both'])->index(); // Computer Marked / Manually marked / Both
            $table->string('ProductCertificateType', 100);
            $table->enum('ProductVisibility', ['visible', 'notvisible'])->index();
            $table->enum('ProductStatus', ['0', '1'])->index(); // O for Inactive And 1 for Active
            $table->timestamp('ProductAddedDate');
            $table->enum('ProductPurchaseType', ['individual', 'class','both'])->index(); // Individual, Class, Both
            $table->unsignedInteger('ProductPractiseExamNumber')->default(1)->index();
            $table->bigInteger('ProductCourseId');
            $table->bigInteger('ProductSession');
            $table->string('SubjectCode', 100);
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
        Schema::dropIfExists('ProductDetail');
    }
}
