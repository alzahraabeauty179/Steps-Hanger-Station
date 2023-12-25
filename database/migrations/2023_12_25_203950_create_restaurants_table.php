<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();

            $table->string('restaurant_name_ar');
            $table->string('restaurant_name_en');
            $table->text('restaurant_description_en');
            $table->text('restaurant_description_ar');
            $table->longtext('restaurant_review');
            $table->text('restaurant_location_en');
            $table->text('restaurant_location_ar');
            $table->string('restaurant_phone');
            $table->text('restaurant_image');
            $table->double('total_sales');
            $table->double('total_sales_before_tax');

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
        Schema::dropIfExists('restaurants');
    }
}
