<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type')->nullable();
            $table->tinyInteger('status')->default(1);
        });

        DB::table('order_types')->insert([
            ['type' => 'Delivery'],
            ['type' => 'Pickup'],
        ]);

        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('restaurant_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedInteger('order_type_id')->nullable();
            $table->double('delivery_charges', 8, 2)->default(0);
            $table->double('discount', 8, 2)->default(0);
            $table->double('tax', 8, 2)->default(0);
            $table->double('sub_total', 8, 2)->default(0);
            $table->double('total', 8, 2)->default(0);
            $table->tinyInteger('payment_method_id')->nullable();
            $table->tinyInteger('status')->default(0);
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();
            $table->string('customer_address')->nullable();
            $table->timestamps();

            $table->foreign('restaurant_id')->references('id')->on('restaurants')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('order_type_id')->references('id')->on('order_types')->onDelete('cascade');
        });

        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('order_id')->nullable();
            $table->unsignedBigInteger('menu_item_id')->nullable();
            $table->double('item_price', 8, 2)->default(0);
            $table->unsignedBigInteger('item_quantity')->nullable();
           
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
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
        Schema::dropIfExists('order_items');
        Schema::dropIfExists('orders');
        Schema::dropIfExists('order_types');
    }
}
