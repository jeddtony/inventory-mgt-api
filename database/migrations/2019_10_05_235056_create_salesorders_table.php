<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('salesorders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id');
            $table->string('sales_orders');
            $table->string('reference');
            $table->dateTime('order_date');
            $table->dateTime('shipment_date')->nullable();
            $table->bigInteger('user_id');
            $table->integer('deliverymethod_id')->nullable();
            $table->double('discount')->nullable();
            $table->double('shipping_charges')->nullable();
            $table->double('miscellanous')->nullable();
            $table->string('customer_notes')->nullable();
            $table->string('terms_and_condition')->nullable();
            $table->double('total')->nullable();
            $table->integer('invoice_id')->nullable();
            $table->integer('package_id')->nullable();
            $table->timestamps();
        });

        Schema::create('item_salesorder', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('item_id');
            $table->integer('salesorder_id');
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
        Schema::dropIfExists('salesorders');
        Schema::dropIfExists('item_salesorder');
    }
}
