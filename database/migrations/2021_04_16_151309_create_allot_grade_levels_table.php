<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotGradeLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allot_grade_levels', function (Blueprint $table) {
            $table->id();
            $table->integer('allotment_type_id')->unsigned();
            $table->smallInteger('school_year')->unsigned();
            $table->integer('grade_level_id');
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
        Schema::dropIfExists('allot_grade_levels');
    }
}
