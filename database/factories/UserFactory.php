<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use PHPUnit\Framework\Constraint\IsNull;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
//        $roles = $this->count(Role::class);
        if(random_int(0,1) == 1){
            $userType = 'agent';
        }else{
            $userType = 'customer';
        }

        return [
            'email' => $this->faker->unique()->safeEmail(),
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
            'firstName' => $this->faker->firstName(),
            'lastName' => $this->faker->lastName(),
            'street' => $this->faker->streetAddress(),
            'postalCode' => $this->faker->postcode(),
            'city' => $this->faker->city(),
            'tel' => $this->faker->phoneNumber(),
            'licenseNumber' => $this->faker->unique()->numberBetween(10000,99999),
            'typeUser' => $userType,
           // 'role_id' => $this->faker->numberBetween(0,$roles),
            ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
