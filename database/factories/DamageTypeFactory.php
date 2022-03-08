<?php

namespace Database\Factories;

use App\Models\DamageType;
use Database\Seeders\DamageTypeSeeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class DamageTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DamageType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return[
            //
        ];
    }
}