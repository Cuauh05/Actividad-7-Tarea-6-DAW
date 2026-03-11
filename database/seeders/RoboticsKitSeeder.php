<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RoboticsKit;

class RoboticsKitSeeder extends Seeder
{
    public function run(): void
    {
        RoboticsKit::create([
            'name' => 'Arduino Starter Kit',
            'description' => 'Basic robotics kit with sensors and Arduino board',
            'price' => 120
        ]);

        RoboticsKit::create([
            'name' => 'LEGO Mindstorms Kit',
            'description' => 'Advanced programmable robotics kit',
            'price' => 350
        ]);

        RoboticsKit::create([
            'name' => 'Raspberry Pi Robotics Kit',
            'description' => 'Robotics kit based on Raspberry Pi platform',
            'price' => 220
        ]);
    }
}