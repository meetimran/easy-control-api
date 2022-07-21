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
        Schema::create('properties', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();
            $table->string('PropertyName', 100)->nullable();
            $table->string('PropertyPrivateKey', 38)->nullable();
            $table->longText('Description')->nullable();
            $table->string('BeneficiaryName', 100)->nullable();
            $table->string('RegisterationNo1', 100)->nullable();
            $table->string('RegisterationNo2', 100)->nullable();
            $table->string('RegisterationNo3', 100)->nullable();
            $table->string('RegisterationNo4', 100)->nullable();
            $table->string('RegisterationNo5', 100)->nullable();
            $table->string('Room', 38)->nullable();
            $table->string('PropertyGrade', 38)->nullable();
            $table->string('PropertyType', 38)->nullable();
            $table->string('Address', 38)->nullable();
            $table->longText('LogoImgPath')->nullable();
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
        Schema::dropIfExists('properties');
    }
};
