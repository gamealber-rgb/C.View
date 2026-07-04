<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('number')->unique();
            $table->unsignedTinyInteger('floor');
            $table->string('name');
            $table->string('slug')->unique()->nullable();
            $table->text('description');
            $table->decimal('price_per_night', 8, 2);
            $table->unsignedTinyInteger('capacity');
            $table->string('bed_type');
            $table->json('amenities');
            $table->json('images');
            $table->boolean('is_available')->default(true);
            $table->smallInteger('sort_order')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
