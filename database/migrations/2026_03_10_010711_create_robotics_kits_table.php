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
    Schema::create('robotics_kits', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->decimal('price', 8, 2);
        $table->timestamps();
    });
}
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('robotics_kits');
    }
};

Schema::create('robotics_kits', function (Blueprint $table) {
    $table->id();
    $table->string('name');
    $table->timestamps();
});

RoboticsKit::create([
    'kit_name' => 'Arduino Starter Kit',
    'kit_description' => 'Basic robotics kit with sensors and Arduino board',
    'cost' => 120
]);

RoboticsKit::create([
    'kit_name' => 'LEGO Mindstorms Kit',
    'kit_description' => 'Advanced programmable robotics kit',
    'cost' => 350
]);

RoboticsKit::create([
    'kit_name' => 'Raspberry Pi Robotics Kit',
    'kit_description' => 'Robotics kit based on Raspberry Pi platform',
    'cost' => 220
]);