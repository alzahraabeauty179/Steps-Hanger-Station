<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->id();

            $table->string('meal_name_ar');
            $table->string('meal_name_en');
            $table->text('meal_description_en');
            $table->text('meal_description_ar');
            $table->double('meal_price');
            $table->boolean('status');
            $table->string('quantity_type');
            $table->integer('quantity');
            $table->string('meal_image');
            $table->double('rate');
            $table->string('sku_number');
            $table->integer('meal_category_id');
            
            // $table->foreign('meal_category_id')->references('id')->on('menu_categories')
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
        Schema::dropIfExists('menu');
    }
}
