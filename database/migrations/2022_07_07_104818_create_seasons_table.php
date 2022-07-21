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
        Schema::create('seasons', function (Blueprint $table) {
           $table->uuid('id')->primary();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();

            $table->dateTime('StartMonth');
            $table->integer('StartDay')->nullable();
            $table->dateTime('EndMonth');
            $table->integer('EndDay')->nullable();
            $table->dateTime('StartDate');
            $table->dateTime('EndDate');

            $table->string('Alias',100)->nullable();
            $table->string('Name',100)->nullable();
            $table->longText('Description')->nullable();

            $table->string('SeasonType',38)->nullable();
            $table->string('Reservation',38)->nullable();

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
        Schema::dropIfExists('seasons');
    }
};
