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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('image');
            $table->string('short_description');
            $table->string('description');
            $table->double('price');
            $table->string('unit');
            $table->integer('brand_id');
            $table->integer('category_id');
            $table->string('made_id');
            $table->integer('warranty');
            $table->integer('sale_status');
            $table->double('discount_percent');
            $table->double('discount_amount');
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
        Schema::dropIfExists('products');
    }
}
