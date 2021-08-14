<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NetworkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('networks')->insert([
            [
                'code' => "Airtel",
                'name' => "Airtel Uganda",
                'logo' => "airtel-uganda-logo.png"
            ],
            [
                'code' => "MTN",
                'name' => "MTN Uganda",
                'logo' => "mtn-uganda-logo.png"
            ],
            [
                'code' => "Africell",
                'name' => "Africell Uganda",
                'logo' => "africell-uganda-logo.png"
            ]
        ]);
    }
}