<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Data\Constituency;
use App\Models\Data\County;

class NairobiConstituenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $nairobiCounty = County::where('code', '047')->first();

        $constituencies = [
            ['name' => 'Westlands'],
            ['name' => 'Dagoretti North'],
            ['name' => 'Dagoretti South'],
            ['name' => 'Langata'],
            ['name' => 'Kibra'],
            ['name' => 'Roysambu'],
            ['name' => 'Kasarani'],
            ['name' => 'Ruaraka'],
            ['name' => 'Embakasi South'],
            ['name' => 'Embakasi North'],
            ['name' => 'Embakasi Central'],
            ['name' => 'Embakasi East'],
            ['name' => 'Embakasi West'],
            ['name' => 'Makadara'],
            ['name' => 'Kamukunji'],
            ['name' => 'Starehe'],
            ['name' => 'Mathare'],
            // Add more constituencies if needed
        ];

        foreach ($constituencies as $constituency) {
            Constituency::create([
                'county_id' => $nairobiCounty->id,
                'name' => $constituency['name'],
            ]);
        }
    }
}
