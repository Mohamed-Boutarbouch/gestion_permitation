<?php

namespace Database\Seeders;

use App\Models\Etablissement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class EtablissementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('fr_FR');

        // Read JSON file
        $json = file_get_contents(database_path('json/etablissements.json'));
        $data = json_decode($json, true);

        foreach ($data as $record) {
            // Generate missing data with Faker
            $record = array_merge([
                'code' => $faker->unique()->randomNumber(6),
                'address' => $faker->address,
                'tel' => $faker->unique()->phoneNumber,
                'fax' => $faker->unique()->phoneNumber,
                'ville_id' => 1,
            ], $record);

            // Insert the record into the database
            Etablissement::create($record);
        }
    }
}
