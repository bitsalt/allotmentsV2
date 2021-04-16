<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grades', function (Blueprint $table) {
            $table->id();
            $table->char('grade', 2)->nullable();
            $table->smallInteger('school_year')->unsigned()->nullable();
            $table->tinyInteger('grade_order')->unsigned()->nullable();
            $table->decimal('moe_divisor', 10,2)->nullable();
            $table->decimal('ta_divisor', 10,2)->nullable();
            $table->decimal('moe_divisor_override1', 10,2)->nullable();
            $table->decimal('ta_divisor_override1', 10,2)->nullable();
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
        Schema::dropIfExists('grades');
    }
}
