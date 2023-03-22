<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Conference::factory(10)->create();
        \App\Models\User::factory()->create([
            'role'=>'admin',
            'firstname'=>'Admin',
            'lastname'=>'Admin',
            'email'=>'admin@e.com',
            'password'=>Hash::make('password'),
        ]);
    }
}
