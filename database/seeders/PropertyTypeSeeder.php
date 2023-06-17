<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\PropertyType;

class PropertyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $propertyTypes = [
            [
                'name' => 'Hotels',
                'description' => 'Standard hotel accommodations with various room types and amenities.',
            ],
            [
                'name' => 'Resorts',
                'description' => 'Luxury accommodations in a resort setting, often featuring additional facilities like pools, spas, and recreational activities.',
            ],
            [
                'name' => 'Villas',
                'description' => 'Private residences or vacation homes with multiple bedrooms, private pools, and kitchen facilities.',
            ],
            [
                'name' => 'Apartments',
                'description' => 'Self-contained units within residential buildings, offering a more home-like experience with kitchenettes or full kitchens.',
            ],
            [
                'name' => 'Guesthouses',
                'description' => 'Smaller accommodations with a more personal touch, often run by locals and providing a homestay atmosphere.',
            ],
            [
                'name' => 'Bed and Breakfasts (B&B)',
                'description' => 'Lodging establishments that offer overnight accommodations and breakfast in a more intimate setting.',
            ],
            [
                'name' => 'Hostels',
                'description' => 'Budget-friendly accommodations with shared facilities like dormitory-style rooms and communal areas.',
            ],
            [
                'name' => 'Homestays',
                'description' => 'Staying in a local\'s home, providing an opportunity to experience the local culture and lifestyle.',
            ],
            [
                'name' => 'Ryokans',
                'description' => 'Traditional Japanese inns known for their unique architecture, hot spring baths, and traditional meals.',
            ],
            [
                'name' => 'Capsule Hotels',
                'description' => 'Compact accommodations with individual sleeping pods, commonly found in urban areas.',
            ],
        ];

        PropertyType::insert($propertyTypes);
    }
}
