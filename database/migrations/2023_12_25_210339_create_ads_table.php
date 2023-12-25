<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();

            $table->string('title_ar')->nullable(false);
            $table->string('title_en')->nullable(false);
            $table->text('description_ar')->nullable(false);
            $table->text('description_en')->nullable(false);
            $table->string('media_type')->nullable(false);
            $table->string('image')->nullable(false);
            $table->string('color')->nullable(false);
            $table->string('section_arrange')->nullable(false);

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
        Schema::dropIfExists('ads');
    }
}
