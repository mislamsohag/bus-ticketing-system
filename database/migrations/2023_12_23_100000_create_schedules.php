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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('scheduleName');
            $table->time('startTime');
            $table->time('endTime');
            //F-key
            $table->unsignedBigInteger('bus_id');
            $table->unsignedBigInteger('route_id');
            //Relation
            $table->foreign('bus_id')->references('id')->on('buses')->restrictOnDelete()->cascadeOnUpdate();            
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
        Schema::dropIfExists('schedules');
    }
};
