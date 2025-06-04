<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class CountriesTableSeeder extends Seeder
{
    public function run()
    {
        $countries = [
            'United States', 'Canada', 'United Kingdom', 'Australia', 'Germany',
            'France', 'India', 'China', 'Japan', 'Brazil',
            'South Africa', 'Russia', 'Mexico', 'Italy', 'Spain',
            'Netherlands', 'Sweden', 'Norway', 'Denmark', 'Switzerland',
            'Pakistan', 'India', 'Afghanistan', 'Bangladesh', 'Palestine', 'Turkey'
            // Add more as needed
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert([
                'name' => $country,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
