<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('currencies')->insert([
            'currency' => 'EUR',
            'date' => '2023-04-19',
            'amount' => '466',
        ]);

        DB::table('currencies')->insert([
            'currency' => 'USD',
            'date' => '2023-04-19',
            'amount' => '486',
        ]);

        DB::table('currencies')->insert([
            'currency' => 'GBP',
            'date' => '2023-04-19',
            'amount' => '666',
        ]);

        DB::table('currencies')->insert([
            'currency' => 'GBP',
            'date' => '2023-04-18',
            'amount' => '666',
        ]);

        DB::table('currencies')->insert([
            'currency' => 'GBP',
            'date' => '2023-04-20',
            'amount' => '666',
        ]);
    }
}
