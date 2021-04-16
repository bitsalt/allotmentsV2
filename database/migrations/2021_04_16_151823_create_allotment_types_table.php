<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAllotmentTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('allotment_types', function (Blueprint $table) {
            $table->id();
            $table->smallInteger('school_year')->unsigned()->nullable();
            $table->char('allotment_prog_code', 20)->nullable();
            $table->char('allotment_prog_desc', 100)->nullable();
            $table->integer('category_id')->nullable();
            $table->char('data_link', 200)->nullable();
            $table->boolean('is_carryover');
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
        Schema::dropIfExists('allotment_types');
    }
}
