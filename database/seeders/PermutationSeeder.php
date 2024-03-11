<?php

namespace Database\Seeders;

use App\Models\Permutation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermutationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permutation::factory()->count(12)->create();
    }
}
