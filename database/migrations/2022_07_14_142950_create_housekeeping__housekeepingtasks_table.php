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
        Schema::create('housekeeping__housekeepingtasks', function (Blueprint $table) {
            $table->string('HouseKeepers', 38)->nullable();
            $table->string('HouseKeepingTasks', 38)->nullable();
            $table->integer('OptimisticLockField')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('housekeeping__housekeepingtasks');
    }
};
