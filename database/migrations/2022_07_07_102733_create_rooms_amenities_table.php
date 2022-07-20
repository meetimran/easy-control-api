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
        Schema::create('rooms_amenities', function (Blueprint $table) {
           $table->id();
            $table->string('Rooms',38)->nullable();
            $table->string('RoomAminities',38)->nullable();
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
        Schema::dropIfExists('rooms_amenities');
    }
};
