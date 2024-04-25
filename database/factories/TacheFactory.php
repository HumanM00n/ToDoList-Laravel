<?php

namespace Database\Factories;

use App\Models\Tache;
use Illuminate\Database\Eloquent\Factories\Factory;

class TacheFactory extends Factory
{
    /**
     * Le modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Tache::class;

    /**
     * Définition du formatage par défaut pour la factory.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom_users_tache' => \App\Models\User::factory(),
            'titre_tache' => $this->faker->sentence,
            'description_tache' => $this->faker->paragraph,
            'ddb_tache' => $this->faker->date,
            'ddf_tache' => $this->faker->date,
            'etat_tache' => \App\Models\Etat_tache::factory(),
        ];
    }
}
