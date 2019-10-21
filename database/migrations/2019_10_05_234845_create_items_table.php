<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('item_type');
            $table->string('sku');
            $table->string('unit');
            $table->string('description');
            $table->integer('length')->nullable();
            $table->integer('width')->nullable();
            $table->integer('height')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('upc')->nullable();
            $table->double('weight')->nullable();
            $table->string('brand')->nullable();
            $table->string('mpn')->nullable();
            $table->string('isbn')->nullable();
            $table->integer('tax_id')->nullable();
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
        Schema::dropIfExists('items');
    }
}
