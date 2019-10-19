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
            $table->dateTime('shipment_date');
            $table->bigInteger('salesperson_id');
            $table->integer('deliverymethod_id');
            $table->double('discount');
            $table->double('shipping_charges');
            $table->double('miscellanous');
            $table->string('customer_notes');
            $table->string('terms_and_condition');
            $table->double('total');
            $table->integer('invoice_id');
            $table->integer('package_id');
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
