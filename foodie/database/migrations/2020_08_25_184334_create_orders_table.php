<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('oid');
            $table->unsignedBigInteger('ouser_id');
            $table->unsignedBigInteger('oresto_id');
            $table->string('oname');
            $table->string('pnumber');
            $table->string('daddress');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('ouser_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('orders');
    }
}
