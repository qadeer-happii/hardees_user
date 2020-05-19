<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Restaurants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->string('description')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();
        });

        Schema::create('payment_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('status')->default(1);
        });

        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('name', 100);
            $table->string('email', 100);
            $table->text('tags')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->text('address');
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->double('min_order_price')->nullable();
            $table->string('expense_type')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('currency_name')->nullable();
            $table->double('delivery_charges', 8, 2)->default(0);
            $table->double('delivery_charges_km', 8, 2)->default(0);
            $table->unsignedInteger('payment_method_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->integer('delivery_time')->nullable();
            $table->string('logo')->nullable();
            $table->string('thumbnail')->nullable();
            $table->string('contact_number')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('auth')->onDelete('cascade');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });

        Schema::create('restaurant_specialties', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->string('title')->unique();
            $table->string('description')->nullable();
            $table->string('status')->default(1);

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });

        Schema::create('restaurant_timings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->string('title')->unique();
            $table->string('description')->nullable();
            $table->string('status')->default(1);

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
        });

        Schema::create('restaurant_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->string('title');

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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('restaurants');
        Schema::dropIfExists('restaurant_specialties');
        Schema::dropIfExists('restaurant_timings');
        Schema::dropIfExists('restaurant_categories');
    }
}
