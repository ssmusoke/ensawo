<?php

namespace Database\Factories;

use App\Models\Network;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\PhoneNumber;
use App\Models\Transaction;
use App\Models\TransactionType;
use Illuminate\Support\Arr;

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
            'message' => $this->faker->paragraph(),
            'amount' => $this->faker->numberBetween(1000, 10000),
            'agent_id' => $this->faker->word,
            'agent_name' => $this->faker->word,
            'agent_number' => $this->faker->word,
            'balance' => $this->faker->numberBetween(500, 7000000),
            'txn_id' => $this->faker->word,
            'txn_date' => $this->faker->dateTime(),
            'fee' => $this->faker->numberBetween(0, 62000),
            'tax' => $this->faker->numberBetween(0, 35000),
            'vendor_name' => $this->faker->word,
            'sender_number' => $this->faker->word,
            'sender_name' => $this->faker->word,
            'sender_account_number' => $this->faker->word,
            'recipient_number' => $this->faker->word,
            'recipient_name' => $this->faker->word,
            'payer_account_number' => $this->faker->word,
            'reason' => $this->faker->word,
            'uuid' => $this->faker->uuid,
            'transaction_type_id' => Arr::random(array_keys(config('ensawo.sms_template_to_transaction_type_mapping'))),
            'network_id' => Arr::random(["mtn", "airtel"])
        ];
    }
}