<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shipment_id');
            $table->integer('product_id');
            $table->integer('order_id');
            $table->integer('packed_quantity');
            $table->dateTime('packed_at');
            $table->integer('shipped_quantity');
            $table->dateTime('shipped_at');
            $table->integer('delivery_quantity');
            $table->dateTime('delivery_at');
            $table->string('note');
            $table->integer('status');
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
        Schema::dropIfExists('shipment_details');
    }
}
