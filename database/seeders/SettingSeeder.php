<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clear existing records
        Setting::truncate();

        // Seed new data
        Setting::create([
            'app_name' => 'Ready Homez',
            'email' => 'info.readyhomez@gmail.com',
            'whatsapp' => '9650425860',
            'contact' => '9873882054',
            'address' => 'Gaur City centre office no FF-201-H',
            'header_image' => "assets/front/images/rh_logo.png",
            'is_fresh' => 1,
        ]);
    }
}
