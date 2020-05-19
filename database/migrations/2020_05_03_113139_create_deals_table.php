<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deal_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->tinyInteger('status')->default(0);
        });

        Schema::create('deals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('deal_category_id')->nullable();
            $table->unsignedInteger('state_id')->nullable();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->string('title', 100)->nullable();
            $table->string('description', 255)->nullable();
            $table->tinyInteger('status')->default(0);
            $table->double('payable_price', 8, 2)->default(0);
            $table->double('calculated_price', 8, 2)->default(0);
            $table->string('image')->nullable();
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('deal_category_id')->references('id')->on('deal_categories')->onDelete('cascade');
        });

        Schema::create('deal_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('deal_id')->nullable();
            $table->unsignedBigInteger('menu_item_id')->nullable();
            $table->integer('quantity')->nullable();

            $table->foreign('deal_id')->references('id')->on('deals')->onDelete('cascade');
            $table->foreign('menu_item_id')->references('id')->on('menu_items')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deal_items');
        Schema::dropIfExists('deals');
        Schema::dropIfExists('deal_categories');
    }
}
