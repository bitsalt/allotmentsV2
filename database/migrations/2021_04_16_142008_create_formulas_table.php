<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allot_formulas', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('school_year')->unsigned()->nullable();
            $table->integer('allot_type_id')->nullable();
            $table->integer('school_grade_level_id')->nullable();
            $table->smallInteger('school_type_id')->nullable();
            $table->char('description', 50)->nullable();
            $table->tinyInteger('display_order')->default(1);
            $table->integer('allot_formulas_meta_id')->nullable();
            $table->decimal('base_amt', 10, 2)->nullable();
            $table->char('mbr_range_ind', 1)->nullable();
            $table->decimal('mbr_range_low', 10, 2)->nullable();
            $table->decimal('mbr_range_high', 10, 2)->nullable();
            $table->decimal('mbr_range_amt', 10, 2)->nullable();
            $table->char('mbr_adj_ind', 1)->nullable();
            $table->char('round', 1)->nullable();
            $table->decimal('mbr_adj_amt', 10, 2)->nullable();
            $table->decimal('mbr_adj_multiplier', 10, 2)->nullable();
            $table->decimal('mbr_adj_divisor', 10, 2)->nullable();
            $table->char('travel_ind', 1)->nullable();
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
        Schema::dropIfExists('allot_formulas');
    }
}
