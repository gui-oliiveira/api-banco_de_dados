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
        if(!User::where('email', 'hack.guilherme@hotmail.com')->first()){
            User::create([
                'name' => 'Guilherme',
                'email' => 'hack.guilherme@hotmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'marcioalmsantos@hotmail.com')->first()){
            User::create([
                'name' => 'Márcio',
                'email' => 'marcioalmsantos@hotmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
        if(!User::where('email', 'neuza.mng@hotmail.com')->first()){
            User::create([
                'name' => 'Neuza',
                'email' => 'neuza.mng@hotmail.com',
                'password' => Hash::make('123456a', ['rounds' => 12]),
            ]);
        }
    }
}
