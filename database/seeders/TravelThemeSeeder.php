<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TravelTheme;

class TravelThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $themes = [
            'Adventure Travel',
            'Beach Vacation',
            'Cultural Exploration',
            'City Break',
            'Nature Retreat',
            'Wildlife Safari',
            'Historical Journey',
            'Food and Culinary Tour',
            'Wellness and Spa Retreat',
            'Hiking and Trekking Expeditions',
            'Cruise Vacation',
            'Backpacking Trip',
            'Road Trip',
            'Island Hopping',
            'Skiing and Snowboarding Adventure',
            'Volunteer and Community Service Trip',
            'Art and Cultural Festivals',
            'Photography Expedition',
            'Shopping Excursion',
            'Spiritual Retreat',
        ];

        foreach ($themes as $theme) {
            TravelTheme::create([
                'name' => $theme,
                'status' => 'active',
            ]);
        }
    }
}
