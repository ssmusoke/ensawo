<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_types')->insert([
            [
                'id' => 1,
                'name' => "Deposit at Agent",
                'code' => 'AGENT_DEPOSIT'
            ],
            [
                'id' => 2,
                'name' => "Withdraw from Agent",
                'code' => 'AGENT_WITHDRAW'
            ],
            [
                'id' => 3,
                'name' => "Send Mobile Money",
                'code' => 'SEND'
            ],
            [
                'id' => 4,
                'name' => "Receive Mobile Money",
                'code' => 'RECEIVE'
            ],
            [
                'id' => 5,
                'name' => "Pay for Services",
                'code' => 'SERVICE_PAYMENT'
            ]
        ]);
    }
}