<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestuarantUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurant_users', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('role')->nullable();
			$table->unsignedBigInteger('restaurant_id')->nullable();
            $table->string('first_name', 50)->nullable();
            $table->string('last_name', 50)->nullable();
			$table->string('username');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
			$table->string('phone_number')->nullable();
            $table->string('profile_picture')->nullable();
            $table->string('address')->nullable();
			$table->date('dob')->nullable();
			$table->string('cnic')->nullable();
			$table->date('cnic_expire_date')->nullable();
			$table->tinyInteger('status')->nullable();
            $table->timestamps();
			
			$table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurant_users');
    }
}
