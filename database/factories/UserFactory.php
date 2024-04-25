<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Le modèle associé à la factory.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Définition du formatage par défaut pour la factory.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->lastName,
            'prenom' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('password'), // Vous pouvez utiliser bcrypt pour hacher le mot de passe par défaut
            'remember_token' => Str::random(10),
        ];
    }
}

