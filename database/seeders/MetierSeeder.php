<?php

namespace Database\Seeders;

use App\Models\Metier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $json = file_get_contents(database_path('json/metiers.json'));
        $metiers = json_decode($json, true);

        foreach ($metiers as $metier) {
            Metier::create($metier);
        }
    }
}
