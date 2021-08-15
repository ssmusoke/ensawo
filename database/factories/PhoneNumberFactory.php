<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Network;
use App\Models\PhoneNumber;

class PhoneNumberFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PhoneNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'number' => $this->faker->regexify('[A-Za-z0-9]{20}'),
            'nickname' => $this->faker->word,
            'uuid' => $this->faker->uuid,
            'owner_id' => User::factory(),
            'network_id' => Network::factory(),
        ];
    }
}