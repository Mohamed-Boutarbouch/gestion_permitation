<?php

namespace Database\Factories;

use App\Models\Etablissement;
use App\Models\Metier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Formateur>
 */
class FormateurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'matricule' => fake()->unique()->randomNumber(),
            'nom' => fake()->lastName,
            'prenom' => fake()->firstName,
            'grade' => fake()->randomElement(['A', 'B', 'C']),
            'date_naissance' => fake()->date(),
            'date_recrutement' => fake()->date(),
            'poste' => fake()->jobTitle,
            'tel' => fake()->phoneNumber,
            'email' => fake()->unique()->safeEmail,
            'password' => bcrypt('password'),
            'metier_id' => Metier::inRandomOrder()->first()->id,
            'etablissement_id' => Etablissement::inRandomOrder()->first()->id
        ];
    }
}
