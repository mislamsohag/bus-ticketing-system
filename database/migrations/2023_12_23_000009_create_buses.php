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
        Schema::create('buses', function (Blueprint $table) {
            $table->id();
            $table->string('busName');
            $table->string('busType');
            $table->string('totalSeat');
            $table->string('busNumber');
            //F-key
            $table->unsignedBigInteger('driver_id');
            $table->unsignedBigInteger('staff_id')->nullable();            
            $table->unsignedBigInteger('route_id');
            //Relation
            $table->foreign('driver_id')->references('id')->on('drivers')->restrictOnDelete()->cascadeOnUpdate();            
            $table->foreign('staff_id')->references('id')->on('staffs')->restrictOnDelete()->cascadeOnUpdate();            
            $table->foreign('route_id')->references('id')->on('routes')->restrictOnDelete()->cascadeOnUpdate();            
            
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buses');
    }
};
