<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itemgroups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('item_type');
            $table->string('description');
            $table->string('unit');
            $table->integer('tax_id');
            $table->string('manufacturer');
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
        Schema::dropIfExists('itemgroups');
    }
}
