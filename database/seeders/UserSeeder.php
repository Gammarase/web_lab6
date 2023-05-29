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
        User::create(['name'=> 'Bohdan', 'email'=>'Bohdan@mail.com', 'password'=>Hash::make('password123')]);
        User::create(['name'=> 'Dmytro', 'email'=>'Dimas@mail.com', 'password'=>Hash::make('secret234')]);
        User::create(['name'=> 'Oleh', 'email'=>'Olek@mail.com', 'password'=>Hash::make('secure123')]);
    }
}
