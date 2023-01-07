<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash; // zakryptovane hesla v databaze
use App\Models\User;


class UserSeeder extends Seeder
{

    public function run()
    {
        User::create([
            'first_name' => 'Katrin',
            'last_name' => 'Kvasnicova',
            'email' => 'afrodita8259@gmail.com',
            'password' => Hash::make('password'),
            ]);
            //User::factory()->count(10)->create();
    }
}
