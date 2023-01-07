<?php

namespace Database\Seeders;

//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
//use Illuminate\Database\Seeder;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Hash;
use App\Models\Department;
//use App\Models\User;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['name'=>'Katrin Kvasnicova',
            'email'=>'afrodita8259@gmail.com',
            'email_verified_at'=>now(),
            'password'=>'password',
            'remember_token'=>Str::random(10),
            ],           

        ]);
    }
}
