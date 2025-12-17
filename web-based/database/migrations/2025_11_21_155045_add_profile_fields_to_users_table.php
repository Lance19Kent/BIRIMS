<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('place_of_birth')->nullable()->after('phone_number');
            $table->string('citizenship')->nullable()->after('place_of_birth');
            $table->string('civil_status')->nullable()->after('citizenship');
            $table->string('occupation')->nullable()->after('civil_status');
            $table->string('house_no')->nullable()->after('occupation');
            $table->string('street')->nullable()->after('house_no');
            $table->string('profile_photo')->nullable()->after('street');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn([
                'place_of_birth',
                'citizenship',
                'civil_status',
                'occupation',
                'house_no',
                'street',
                'profile_photo'
            ]);
        });
    }
};