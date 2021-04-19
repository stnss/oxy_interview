<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
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
            'email' => 'admin@testoxy.com',
            'password' => Hash::make('password'),
            'role' => 1,
        ]);

        User::create([
            'name' => 'Non Admin',
            'email' => 'nonadmin@testoxy.com',
            'password' => Hash::make('password'),
            'role' => 0,
        ]);
    }
}
