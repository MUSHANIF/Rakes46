<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 5
        ]);

        User::create([
            'name' => 'Darmin Pradana',
            'email' => 'darmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 4
        ]);

        User::create([
            'name' => 'Puskesmas',
            'email' => 'puskesmas@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 3
        ]);

        User::create([
            'name' => 'Anastasia Susanti',
            'email' => 'anassusanti@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'Angel Callista',
            'email' => 'angel@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 1
        ]);

        User::create([
            'name' => 'Musthafa Hanif',
            'email' => 'musthafa@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 1
        ]);

        User::create([
            'name' => 'Khairul Akmal',
            'email' => 'akmal@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 1
        ]);

        User::factory()->count(3)->create();
    }
}
