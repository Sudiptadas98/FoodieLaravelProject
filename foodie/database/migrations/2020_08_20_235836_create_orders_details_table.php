<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('od_oid');
            $table->string('ofoodname');
            $table->string('ofprice');
            $table->string('ofquantity');
            $table->string('oftprice');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('od_oid')
                ->references('oid')
                ->on('orders')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_details');
    }
}
