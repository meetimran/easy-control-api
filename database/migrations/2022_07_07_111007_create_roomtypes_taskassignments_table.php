<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roomtypes_taskassignments', function (Blueprint $table) {
           $table->id();
            $table->string('RoomTypes',38)->nullable();
            $table->string('TaskAssignments',38)->nullable();
            $table->integer('OptimisticLockField')->nullable();
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
        Schema::dropIfExists('roomtypes__taskassignments');
    }
};
