<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    public function run(): void
    {
        $brands = [
            [
                'name' => 'Specsavers Advance',
                'description' => 'A range of hearing aids with multiple levels (Standard, Plus, Premium, Super, Elite) aimed at different budgets.',
            ],
            [
                'name' => 'Phonak',
                'description' => 'A well-known hearing aid manufacturer with solutions focused on speech clarity and connectivity options.',
            ],
            [
                'name' => 'Signia',
                'description' => 'Hearing aids designed for a balance of sound processing and comfort, with options for varying listening environments.',
            ],
            [
                'name' => 'GN Resound',
                'description' => 'Devices known for natural sound and useful features for everyday listening situations.',
            ],
        ];

        foreach ($brands as $b) {
            Brand::updateOrCreate(['name' => $b['name']], $b);
        }
    }
}
