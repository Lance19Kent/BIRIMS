<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('blotters', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Links to users table
            $table->date('blotter_date');
            
            // Complainant/Reporter Information
            $table->string('complainant_name');
            $table->text('complainant_address');
            $table->string('complainant_contact');
            $table->integer('complainant_age');
            
            // Respondent Information
            $table->string('respondent_name');
            $table->text('respondent_address');
            $table->string('respondent_contact');
            $table->integer('respondent_age');
            
            // Incident Details
            $table->string('complaint_type');
            $table->text('incident_description');
            
            // Reporter Information (if different from complainant)
            $table->string('reporter_signature')->nullable();
            $table->string('reporter_name');
            $table->date('report_date');
            $table->time('report_time');
            
            // Status tracking
            $table->enum('status', ['pending', 'under_investigation', 'resolved', 'dismissed'])->default('pending');
            
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blotters');
    }
};
