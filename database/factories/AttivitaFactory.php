<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Progetti;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\attivita>
 */
class AttivitaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nomeAttivita' => fake()->text(20),
            'descrizioneAttivita' => fake()->text(100),
            'statoAttivita' => fake()->text(20),
            'progetto_id' => Progetti::get()->random()->id,
            'created_at' => fake()->datetime()
        ];
    }
}