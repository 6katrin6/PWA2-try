<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Department;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            //UserAdminSeeder::class,
            DepartmentSeeder::class,
            ]);
            
        // \App\Models\User::factory(10)->create();
        /*
        $this->call([
            DepartmentSeeder::class,
            ]);
            */
    }
}
