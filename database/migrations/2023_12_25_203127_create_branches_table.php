<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id();

            $table->string('branch_name_ar');
            $table->string('branch_name_en');
            $table->text('branch_description_ar');
            $table->text('branch_description_en');
            $table->text('branch_location');
            $table->string('area');
            $table->integer('working_hours_from');
            $table->integer('working_hours_to');
            $table->integer('working_days');

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
        Schema::dropIfExists('branches');
    }
}
