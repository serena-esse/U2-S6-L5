<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\progetti>
 */
class ProgettiFactory extends Factory

{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {$tipologie = ['Frontend', 'backend', 'fullstack'];
        $linguaggioSviluppo = ['PHP', 'Laravel', 'VaniliaJs', 'ReactJs', 'AngularJs'];
        $stato = ['InCorso', 'Completato', 'Annullato'];

        return [
            'nome' => fake()->unique()->text(20),
            'descrizione' => fake()->text(100),
            'tipologia' => $this->faker->randomElement($tipologie),
            'linguaggioSviluppo' => $this->faker->randomElement($linguaggioSviluppo),
            'stato' => $this->faker->randomElement($stato),
            'user_id' => User::get()->random()->id,
            'created_at' => fake()->datetime()
        ];
    }
}