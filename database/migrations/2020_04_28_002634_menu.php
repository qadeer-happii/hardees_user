<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
        });

        Schema::create('menu_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('menu_category_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->string('name')->unique();
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedInteger('quantity')->nullable();
            $table->double('price', 8, 2)->nullable();
            $table->double('discount', 8, 2)->nullable();
			$table->double('weight', 8, 2)->nullable();
            $table->integer('is_favourite')->nullable();
            $table->string('image')->nullable();
            $table->text('ingredients')->nullable();
            $table->timestamps();

            $table->foreign('menu_category_id')->references('id')->on('menu_categories')->onDelete('cascade');
            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('created_by')->references('id')->on('auth')->onDelete('cascade');
        });
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_items');
        Schema::dropIfExists('menu_categories');
    }
}
