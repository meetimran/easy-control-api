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
        Schema::create('checkins', function (Blueprint $table) {
            $table->id();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();
            $table->string('TrackingID', 100)->nullable();
            $table->dateTime('CheckInDate')->nullable();
            $table->dateTime('ReservationDate')->nullable();
            $table->longText('Remarks')->nullable();
            $table->integer('NoOfChilds')->nullable();
            $table->integer('NoOfAdults')->nullable();
            $table->integer('NoOfNightsToStay')->nullable();
            $table->dateTime('DepartureDate')->nullable();
            $table->integer('IsCheckedOut')->nullable();
            $table->string('Reservation', 38)->nullable();
            $table->string('Guest', 38)->nullable();
            $table->string('RateType', 38)->nullable();
            $table->integer('OptimisticLockField')->nullable();
            $table->integer('GCRecord')->nullable();
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
        Schema::dropIfExists('checkins');
    }
};
