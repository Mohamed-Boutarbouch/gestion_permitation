<?php

namespace Database\Factories;

use App\Models\Formateur;
use App\Models\Ville;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Permutation>
 */
class PermutationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => fake()->date(),
            'valide' => fake()->boolean(),
            'ville_id' => Ville::inRandomOrder()->first()->id,
            'formateur_id' => Formateur::inRandomOrder()->first()->id
        ];
    }
}
