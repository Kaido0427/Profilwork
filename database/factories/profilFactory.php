<?php

namespace Database\Factories;

use App\Models\competence;
use App\Models\localite;
use App\Models\profil;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\profil>
 */
class profilFactory extends Factory
{
    protected $model = profil::class;
    /**
     * Define the model's default state.
     *
     * 
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom'=>$this->faker->name(),
            'prenom'=>$this->faker->name(),
            'date_nais'=>$this->faker->date(),
            'contact'=>$this->faker->phoneNumber(8),
            'description'=>$this->faker->paragraph(1,true),
            'localite_id'=>localite::all()->random()->id,
            'user_id'=>User::all()->random()->id,
            'competence_id'=>competence::all()->random()->id,

        ];
    }
}
