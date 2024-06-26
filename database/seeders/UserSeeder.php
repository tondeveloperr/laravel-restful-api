<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'usertest',
            'password' => Hash::make('password test'),
            'name' => 'name test',
            'token' => 'tokentest'
        ]);

        User::create([
            'username' => 'usertest2',
            'password' => Hash::make('password test2'),
            'name' => 'name test2',
            'token' => 'tokentest2'
        ]);
    }
}
