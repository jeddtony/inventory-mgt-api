<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchaseorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('vendor_id');
            $table->string('deliver_to');
            $table->string('order')->unique();
            $table->dateTime('expected_delivery_date');
            $table->string('shipment');
            $table->double('discount');
            $table->string('terms_and_cond');
            $table->string('notes');
            $table->timestamps();
        });

        Schema::create('item_purchaseorder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_id');
            $table->string('purchaseorder_id');
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
        Schema::dropIfExists('purchaseorders');
    }
}
