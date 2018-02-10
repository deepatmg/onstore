<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePmodelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pmodels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productname');
            $table->string('description');
            $table->string('meta_tag_title');
            $table->string('meta_tag_description');
            $table->string('meta_keyword');
            $table->string('product_tag');
            $table->string('model');
            $table->string('sku');
            $table->string('upc');
            $table->string('isbn');
            $table->string('location');
            $table->float('price');
            $table->string('tax_class');
            $table->integer('quantity');
            $table->integer('minimum_quantity');
            $table->string('subtract_stock');
            $table->string('out_of_stock');
            $table->string('requires_shipping');
            $table->string('SEOurl');
            $table->date('date_available');
            $table->float('length');
            $table->float('width');
            $table->float('height');
            $table->string('length_class');
            $table->float('weight');
            $table->string('weight_class');
            $table->string('status');
            $table->integer('sortorder');
            $table->string('manufacturer');
            $table->integer('category');
            $table->string('filter');
            $table->string('store');
            $table->string('related_products');
            $table->string('image');
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
        Schema::dropIfExists('pmodels');
    }
}
