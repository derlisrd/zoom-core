<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $pass = env('USER_SEED_PASS');
        User::factory()->create([
            'name'=>'Mantenimiento',
            'username'=>env('USER_SEED_USERNAME'),
            'email'=>env('USER_SEED_EMAIL'),
            'password'=> Hash::make($pass),
        ]);
    }
}
