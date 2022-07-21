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
        Schema::create('addresses', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id');
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();
            $table->string('Country', 100)->nullable();
            $table->string('State', 100)->nullable();
            $table->string('City', 100)->nullable();
            $table->string('PostalCode', 100)->nullable();
            $table->string('Address', 100)->nullable();
            $table->string('MobileNo', 100)->nullable();
            $table->string('PhoneNo', 100)->nullable();
            $table->string('PhoneNo2', 100)->nullable();
            $table->string('FaxNo', 100)->nullable();
            $table->string('Email', 100)->nullable();
            $table->string('WebUrl', 100)->nullable();
            $table->string('FacebookUrl', 100)->nullable();
            $table->string('TwitterUrl', 100)->nullable();
            $table->string('LinkedinUrl', 100)->nullable();
            $table->string('InstagramUrl', 100)->nullable();
            $table->string('WhatsApp', 100)->nullable();
            $table->string('Property', 38)->nullable();
            $table->string('Guest', 38)->nullable();
            $table->string('BillingGuest', 38)->nullable();
            $table->string('HouseKeeper', 38)->nullable();
            $table->string('BusinessSource', 38)->nullable()->nullable();
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
        Schema::dropIfExists('addresses');
    }
};
