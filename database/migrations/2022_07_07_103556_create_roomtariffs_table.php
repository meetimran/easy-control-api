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
        Schema::create('roomtariffs', function (Blueprint $table) {
           $table->uuid('id')->primary();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();
            $table->string('Alias',100)->nullable();
            $table->string('Name',100)->nullable();

            $table->decimal('Tariff',28,8)->nullable();
            $table->decimal('ExtraAdults',28,8)->nullable();
            $table->decimal('ExtraChilds',28,8)->nullable();
            $table->integer('IsBusinessSourceRate')->nullable();
            $table->string('RoomType',38)->nullable();
            $table->string('RateType',38)->nullable();
            $table->string('MarketPlace',38)->nullable();
            $table->string('BusinessSource',38)->nullable();
            
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
        Schema::dropIfExists('roomtariffs');
    }
};
