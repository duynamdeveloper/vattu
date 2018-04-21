<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id');
            $table->integer('type');
            $table->string('transport_unit')->comment('Transport Company or Person');
            $table->integer('customer_id');
            $table->string('tracking_number');
            $table->dateTime('packed_at');
            $table->dateTime('shipped_at');
            $table->dateTime('delivery_at');
            $table->string('address');
            $table->string('note');
            $table->integer('status');
            $table->softDeletes();
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
        Schema::dropIfExists('shipments');
    }
}
