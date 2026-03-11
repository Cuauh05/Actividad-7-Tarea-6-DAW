<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->integer('duration_hours');
            $table->string('level');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

Schema::create('courses', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->string('cover')->nullable();
    $table->text('content');
    $table->foreignId('robotics_kit_id')->constrained();
    $table->timestamps();
});