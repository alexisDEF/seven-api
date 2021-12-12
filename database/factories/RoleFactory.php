<?php

namespace Database\Factories;

use App\Models\Capacity;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Role::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $users=$this->count(User::class);
        $capacities = $this->count(Capacity::class);
        return [
            'user_id'=>$this->faker->numberBetween(1,$users),
            'capacity_id'=>$this->faker->numberBetween(1,$capacities),
        ];
    }
}
