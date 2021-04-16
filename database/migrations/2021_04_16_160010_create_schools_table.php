<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('school_num');
            $table->smallInteger('school_year')->unsigned();
            $table->char('school_name', 50)->nullable();
            $table->char('magnet_ind', 1)->nullable();
            $table->char('restart_ind', 1)->nullable();
            $table->integer('school_grade_level_id')->nullable();
            $table->integer('school_type_id')->nullable();
            $table->boolean('has_schedule_assistance')->default(0);
            $table->tinyInteger('schedule_assistance_hours')->nullable();
            $table->boolean('grandfathered')->default(0);
            $table->tinyInteger('grandfathered_moe')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
