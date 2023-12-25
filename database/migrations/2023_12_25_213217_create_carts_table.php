<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();

            $table->integer('meal_id');
            $table->double('price');
            $table->integer('quantity');
            $table->double('total_price');
            $table->integer('user_id');
            $table->string('IP_ADDRESS');
            $table->boolean('status');

            // $table->foreign('meal_id')->references('id')->on('menu')
            //     ->onUpdate('cascade')->onDelete('cascade');
            // $table->foreign('user_id')->references('id')->on('users')
            //     ->onUpdate('cascade')->onDelete('cascade');

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
        Schema::dropIfExists('carts');
    }
}
