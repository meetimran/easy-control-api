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
        Schema::create('checkouts', function (Blueprint $table) {
            $table->id();
            $table->integer('IsActive')->nullable();
            $table->integer('property_id')->nullable();
            $table->string('CreatedBy', 38)->nullable();
            $table->string('LastUpdatedBy', 38)->nullable();
            $table->string('CreatedByName', 100)->nullable();
            $table->string('LastUpdatedByName', 100)->nullable();
            $table->integer('SortKey')->nullable();
            $table->string('TrackingID', 100)->nullable();
            $table->string('InvoiceNo', 100)->nullable();
            $table->dateTime('CheckInDate')->nullable();
            $table->dateTime('CheckOutDate')->nullable();
            $table->integer('NoOfNightsToStay')->nullable();
            $table->integer('IsInvoiceToSamePerson')->nullable();
            $table->string('Remarks', 100)->nullable();
            $table->string('CheckIn', 38)->nullable();
            $table->string('PaymentType', 38)->nullable();
            $table->string('InvoiceTo', 38)->nullable();
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
        Schema::dropIfExists('checkouts');
    }
};
