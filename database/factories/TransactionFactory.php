<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Models\User;
use App\Models\PhoneNumber;
use App\Models\Transaction;
use App\Models\TransactionType;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'amount' => $this->faker->numberBetween(-10000, 10000),
            'agent_id' => $this->faker->word,
            'agent_name' => $this->faker->word,
            'agent_number' => $this->faker->word,
            'balance' => $this->faker->randomFloat(0, 0, 9999999999.),
            'txn_id' => $this->faker->word,
            'txn_date' => $this->faker->dateTime(),
            'fee' => $this->faker->randomFloat(0, 0, 9999999999.),
            'tax' => $this->faker->randomFloat(0, 0, 9999999999.),
            'vendor_name' => $this->faker->word,
            'sender_number' => $this->faker->word,
            'sender_name' => $this->faker->word,
            'sender_account_number' => $this->faker->word,
            'recipient_number' => $this->faker->word,
            'recipient_name' => $this->faker->word,
            'payer_account_number' => $this->faker->word,
            'reason' => $this->faker->word,
            'uuid' => $this->faker->uuid,
            'created_by' => User::factory()->create()->created_by,
            'phone_number_id' => PhoneNumber::factory(),
            'transaction_type_id' => TransactionType::factory(),
        ];
    }
}
