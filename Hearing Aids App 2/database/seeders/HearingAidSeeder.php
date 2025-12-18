<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\HearingAid;
use Illuminate\Database\Seeder;

class HearingAidSeeder extends Seeder
{
    public function run(): void
    {
        $brandId = function (string $name): int {
            return (int) Brand::where('name', $name)->value('id');
        };

        $data = [
            [
                'brand_id' => $brandId('Specsavers Advance'),
                'instrument' => 'Standard',
                'price_per_pair' => 495.00,
                'rechargeable' => false,
                'sound_quality' => 2,
                'suitability_active_lifestyles' => 1,
                'suitability_small_groups' => 1,
                'social_situations' => 1,
                'description' => 'Budget option for everyday listening. Best for quieter settings and casual use.',
            ],
            [
                'brand_id' => $brandId('Specsavers Advance'),
                'instrument' => 'Plus',
                'price_per_pair' => 995.00,
                'rechargeable' => true,
                'sound_quality' => 3,
                'suitability_active_lifestyles' => 3,
                'suitability_small_groups' => 2,
                'social_situations' => 2,
                'description' => 'Mid-range upgrade with improved clarity and better performance in small group conversations.',
            ],
            [
                'brand_id' => $brandId('Specsavers Advance'),
                'instrument' => 'Premium',
                'price_per_pair' => 1495.00,
                'rechargeable' => true,
                'sound_quality' => 4,
                'suitability_active_lifestyles' => 3,
                'suitability_small_groups' => 3,
                'social_situations' => 3,
                'description' => 'Premium option designed for improved sound quality and more confident listening in social settings.',
            ],
            [
                'brand_id' => $brandId('Specsavers Advance'),
                'instrument' => 'Super',
                'price_per_pair' => 1795.00,
                'rechargeable' => true,
                'sound_quality' => 5,
                'suitability_active_lifestyles' => 4,
                'suitability_small_groups' => 4,
                'social_situations' => 4,
                'description' => 'High-end model with stronger noise handling and a better experience in busier environments.',
            ],
            [
                'brand_id' => $brandId('Specsavers Advance'),
                'instrument' => 'Elite',
                'price_per_pair' => 1995.00,
                'rechargeable' => true,
                'sound_quality' => 5,
                'suitability_active_lifestyles' => 5,
                'suitability_small_groups' => 5,
                'social_situations' => 5,
                'description' => 'Top-tier option in the Advance range, aimed at users who want the best overall performance.',
            ],
            [
                'brand_id' => $brandId('Phonak'),
                'instrument' => 'Lumity',
                'price_per_pair' => 2895.00,
                'rechargeable' => true,
                'sound_quality' => 5,
                'suitability_active_lifestyles' => 4,
                'suitability_small_groups' => 4,
                'social_situations' => 4,
                'description' => 'Premium device focused on speech understanding and stronger performance across everyday scenarios.',
            ],
            [
                'brand_id' => $brandId('Phonak'),
                'instrument' => 'Paradise',
                'price_per_pair' => 2495.00,
                'rechargeable' => true,
                'sound_quality' => 4,
                'suitability_active_lifestyles' => 4,
                'suitability_small_groups' => 4,
                'social_situations' => 4,
                'description' => 'High quality sound with reliable features for active users and social conversations.',
            ],
            [
                'brand_id' => $brandId('Phonak'),
                'instrument' => 'Marvel',
                'price_per_pair' => 2095.00,
                'rechargeable' => true,
                'sound_quality' => 4,
                'suitability_active_lifestyles' => 3,
                'suitability_small_groups' => 3,
                'social_situations' => 3,
                'description' => 'A solid all-rounder offering balanced performance and improved listening comfort.',
            ],
            [
                'brand_id' => $brandId('Signia'),
                'instrument' => 'AX',
                'price_per_pair' => 2695.00,
                'rechargeable' => true,
                'sound_quality' => 5,
                'suitability_active_lifestyles' => 5,
                'suitability_small_groups' => 4,
                'social_situations' => 4,
                'description' => 'Designed for challenging environments and active lifestyles, while keeping speech clear.',
            ],
            [
                'brand_id' => $brandId('Signia'),
                'instrument' => 'Xperience',
                'price_per_pair' => 2295.00,
                'rechargeable' => true,
                'sound_quality' => 4,
                'suitability_active_lifestyles' => 4,
                'suitability_small_groups' => 4,
                'social_situations' => 3,
                'description' => 'Strong everyday performance with good balance across quiet and moderately noisy situations.',
            ],
            [
                'brand_id' => $brandId('GN Resound'),
                'instrument' => 'One',
                'price_per_pair' => 2395.00,
                'rechargeable' => true,
                'sound_quality' => 4,
                'suitability_active_lifestyles' => 4,
                'suitability_small_groups' => 3,
                'social_situations' => 3,
                'description' => 'Natural sound profile with features suitable for daily conversations and small-group listening.',
            ],
        ];

        foreach ($data as $row) {
            HearingAid::create($row);
        }
    }
}
