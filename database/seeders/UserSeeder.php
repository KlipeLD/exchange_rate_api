<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('11111'),
        ]);


        $token = $user->createToken($user->name);
        $user->giveRolesTo('admin');

        $user2 = \App\Models\User::factory()->create([
            'name' => 'Example User',
            'email' => 'test@example.com',
            'password' => Hash::make('22222'),
        ]);

        $token2 = $user2->createToken($user2->name);
        Log::debug('Token1: '. $token->plainTextToken);
        Log::debug('Token2: ' . $token2->plainTextToken);

        
    }
}
