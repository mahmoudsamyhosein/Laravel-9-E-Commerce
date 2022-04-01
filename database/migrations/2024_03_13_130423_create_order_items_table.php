<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->nullable();
            $table->unsignedBigInteger('order_id')->nullable();
            $table->decimal('price');
            $table->integer('quantity');
            $table->boolean('rstatus')->default(false);
            $table->longText('options')->nullable();
            $table->timestamps();
            $table->foreign('product_id')->references('id')->on('products')->nullOnDelete();
            $table->foreign('order_id')->references('id')->on('orders')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items', function(Blueprint $table){
            $table->boolean('rstatus')->default(false);
            $table->dropColumn('options');
        });
    }
}
