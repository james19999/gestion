<?php

namespace Database\Factories;

use App\Models\Eleve;
use Illuminate\Database\Eloquent\Factories\Factory;

class EleveFactory extends Factory
{
    protected $model =Eleve::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->name,
            'prenom'=>$this->faker->name,
            'age'=>$this->faker->numberBetween(0,60),
            'date_naissance'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'sexe'=>'masculin',
        ];
    }
}