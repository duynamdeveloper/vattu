<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function(Blueprint $table){
            $table->integer('is_active')->default(0);
            $table->string('SKU');
            $table->integer('manufacture_id');
            $table->integer('show_on_homepage')->default(0);
            $table->integer('is_new')->default(0);
            $table->text('admin_comment');
            $table->text('description')->change();
            $table->double('old_sale_price')->nullable();
            $table->integer('available_pre_order')->default(0);
            $table->string('related_products')->nullable();
            $table->double('weight');
            $table->double('height');
            $table->double('width');
            $table->double('length');
            $table->string('meta_keywords');
            $table->string('meta_description');
            $table->string('meta-title');
            $table->string('search_engine_friendly_page_name');
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
