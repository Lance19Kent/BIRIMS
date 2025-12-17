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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            
            // Appointment Details
            $table->string('diagnostic_service');
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->text('symptoms');
            
            // Patient Information
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email');
            
            // Status
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending');
            
            // Additional fields for admin
            $table->string('doctor_name')->nullable();
            $table->string('doctor_specialty')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
