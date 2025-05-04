<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'google_id' => null,
                'first_name' => 'Admin',
                'last_name' => 'User',
                'email' => 'admin@alter.com',
                'verification_code' => Str::random(40),
                'email_verified_at' => now(),
                'email_verified' => 1,
                'password' => '$2y$12$rI56aaibnpXyvVh8D5uqIODmDF08dqtha5mML2XQKhxhaleo605b6',
                'remember_token' => Str::random(10),
                'phone_number' => '5551234567',
                'mobile_verified' => 1,
                'about' => 'Ben Ali, yazılım geliştiricisiyim.',
                'balance' => '100.50',
                'role' => 'user',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'google_id' => 1234567890,
                'first_name' => 'Ayşe',
                'last_name' => 'Demir',
                'email' => 'ayse@example.com',
                'verification_code' => Str::random(40),
                'email_verified_at' => null,
                'email_verified' => 0,
                'password' => Hash::make('secret'),
                'remember_token' => null,
                'phone_number' => null,
                'mobile_verified' => 0,
                'about' => null,
                'balance' => '0',
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
