<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name'=> 'Ahmad Samsudin',
            'email'=> 'samsudin@gmail.com',
            'password'=> Hash::make('123'),
            'user_IdRole'=>'1',
            'email_verified_at'=>now(),
            'remember_token'=> Str::random(10),

        ]);

        User::create([
            'name'=> 'Soleh Hadi',
            'email'=> 'hadi@gmail.com',
            'password'=> Hash::make('123'),
            'user_IdRole'=>'2',
            'email_verified_at'=>now(),
            'remember_token'=> Str::random(10),

        ]);

        User::create([
            'name'=> 'Muhammad Fakhrudin',
            'email'=> 'fakhrudin@gmail.com',
            'password'=> Hash::make('123'),
            'user_IdRole'=>'3',
            'email_verified_at'=>now(),
            'remember_token'=> Str::random(10),

        ]);
    }
}
