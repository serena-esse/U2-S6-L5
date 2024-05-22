<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
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
        User::factory()->count(3)->create();
        /* User:: factory () -> create ([
            'name' => 'Admin',
            'email' => 'Admin@Admin.it',
            'password' => Hash::make('Admin123'),
            'is_admin' => true
        ]); */
    }
}