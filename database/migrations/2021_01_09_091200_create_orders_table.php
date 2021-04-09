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
            $table->id();
            $table->integer('quantity');
            $table->double('total');
            $table->string('progress');
            $table->bigInteger('tree_id');
            $table->integer('phone');
            $table->text('address');
            $table->string('city');
            $table->string('country');
            $table->string('zip_code', 5);
            $table->foreign('tree_id')->references('id')->on('trees');
            $table->bigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('orders');
    }
}
