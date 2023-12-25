<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->date('travelDate');
            //F-key
            $table->unsignedBigInteger('passenger_id');
            $table->unsignedBigInteger('route_id');
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('schedule_id');
            //Relation
            $table->foreign('passenger_id')->references('id')->on('passengers')->restrictOnDelete()->cascadeOnUpdate();            
            $table->foreign('route_id')->references('id')->on('routes')->restrictOnDelete()->cascadeOnUpdate();            
            $table->foreign('bus_id')->references('id')->on('buses')->restrictOnDelete()->cascadeOnUpdate();            
            $table->foreign('schedule_id')->references('id')->on('schedules')->restrictOnDelete()->cascadeOnUpdate();            
            

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
