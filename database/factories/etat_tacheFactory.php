<?php

namespace Database\Factories;

use App\Models\Etat_tache;
use Illuminate\Database\Eloquent\Factories\Factory;

class EtatTacheFactory extends Factory
{
    /**
     * Le modèle associé à la factory.
     *
     * @var string
     */
    protected $model = Etat_tache::class;

    /**
     * Définition du formatage par défaut pour la factory.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lib_etat' => $this->faker->word, // Générer un mot aléatoire pour le libellé de l'état
        ];
    }
}

