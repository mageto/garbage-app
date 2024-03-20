<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Data\Ward;
use App\Models\Data\Constituency;

class KasaraniWardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kasaraniConstituency = Constituency::where('name', 'Kasarani')->first();

        $wards = [
            ['name' => 'Clay City'],
            ['name' => 'Kasarani'],
            ['name' => 'Mwiki'],
            ['name' => 'Kahawa West'],
            ['name' => 'Kahawa'],
            ['name' => 'Roysambu'],
            ['name' => 'Githurai'],
            ['name' => 'Zimmerman'],
            ['name' => 'Kasarani'],
            ['name' => 'Clay City'],
            // Add more wards within Kasarani constituency
        ];
        
        foreach ($wards as $ward) {
            Ward::create([
                'constituency_id' => $kasaraniConstituency->id,
                'name' => $ward['name'],
            ]);
        }
    }
}
