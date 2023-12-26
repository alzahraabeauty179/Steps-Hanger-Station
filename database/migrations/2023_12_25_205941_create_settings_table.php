<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
    
            $table->string('restaurant_name_en');
            $table->string('restaurant_name_ar');
            $table->text('restaurant_description_en');
            $table->text('restaurant_description_ar');
            $table->string('location_ar');
            $table->string('location_en');
            $table->string('email');
            $table->string('phone');
            $table->string('youtube');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->integer('opening_days');
            $table->integer('opening_hours');
            $table->string('theme_colour');
            $table->string('text_colour');
            $table->string('logo');
            $table->string('icon');
            $table->string('reservation_section');
            $table->string('cat_title_en_1');
            $table->integer('cat_time_from_1');
            $table->integer('cat_time_to_1');
            $table->string('cat_title_en_2');
            $table->integer('cat_time_from_2');
            $table->integer('cat_time_to_2');
            $table->string('cat_title_en_3');
            $table->integer('cat_time_from_3');
            $table->integer('cat_time_to_3');
            $table->string('cat_title_en_4');
            $table->integer('cat_time_from_4');
            $table->integer('cat_time_to_4');
            $table->integer('cat_1');
            $table->string('cat_2');
            $table->integer('cat_3');
            $table->integer('cat_4');
            $table->string('footer_logo');
            $table->string('header_logo');
            $table->string('cat_title_ar_1');
            $table->string('cat_title_ar_2');
            $table->string('cat_title_ar_3');
            $table->string('cat_title_ar_4');
            $table->string('about_image');

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
        Schema::dropIfExists('settings');
    }
}
