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
            'name' => 'Super Admin',
            'email' => 'superadmin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 5
        ]);

        User::create([
            'name' => 'Kepala Sekolah',
            'email' => 'kepalasekolah@gmail.com',
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
            'name' => 'guru10rpl',
            'email' => '10rpl@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'guru11rpl',
            'email' => '11rpl@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'guru12rpl',
            'email' => '12rpl@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'guru10dkv',
            'email' => '10dkv@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'guru11dkv',
            'email' => '11dkv@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('password'),
            'level' => 2
        ]);

        User::create([
            'name' => 'guru12dkv',
            'email' => '12dkv@gmail.com',
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
    }
}
