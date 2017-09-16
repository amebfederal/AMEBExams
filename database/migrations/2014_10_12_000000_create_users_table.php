<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('phone');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('password');
            $table->timestamp('last_logged_in');
            $table->string('last_logged_from',100)->nullable();
            $table->enum('user_type', ['candidate', 'accountholders','superadmin'])->default('accountholders')->index();
            $table->enum('status', ['active', 'in_active'])->default('active')->index();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
