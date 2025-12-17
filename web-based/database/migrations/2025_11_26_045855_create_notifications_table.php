<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('notifications', function (Blueprint $table) {
            $table->id();

            // user relation
            $table->foreignId('user_id')
                  ->constrained()
                  ->cascadeOnDelete();

            // notification content
            $table->string('title');
            $table->text('message');
            $table->boolean('is_read')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('notifications');
    }
};
