<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'name' => $this->faker->name,
            'email' => 'alberttojrfsa@gmail.com',
            'document' => $this->faker->buildingNumber,
            'phone' => $this->faker->phoneNumber,
            'cep' => $this->faker->buildingNumber,
            'street' => $this->faker->streetAddress,
            'number' => $this->faker->numberBetween(10,20),
            'district' =>$this->faker->word,
            'city' => $this->faker->city,
            'state' =>$this->faker->state,
            'complement' => $this->faker->sentence,
            'password' => bcrypt('123mudar')

        ];
    }
}
