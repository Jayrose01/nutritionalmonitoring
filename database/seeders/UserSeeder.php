<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserType;
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
        UserType::create([
            'type' => 'Admin',
        ]);
        UserType::create([
            'type' => 'Teacher',
        ]);
        UserType::create([
            'type' => 'Parent',
        ]);
        UserType::create([
            'type' => 'Student',
        ]);


        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'user_type_id' => 1,
        ]);
        User::create([
            'name' => 'teacher',
            'email' => 'teacher@gmail.com',
            'password' => Hash::make('password'),
            'user_type_id' => 2,
        ]);
        User::create([
            'name' => 'parent',
            'email' => 'parent@gmail.com',
            'password' => Hash::make('password'),
            'user_type_id' => 3,
        ]);
        User::create([
            'name' => 'student',
            'email' => 'student@gmail.com',
            'password' => Hash::make('password'),
            'user_type_id' => 4,
        ]);
    }
}