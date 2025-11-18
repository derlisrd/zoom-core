<?php

namespace Database\Seeders;

use App\Models\Producto;
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

        Producto::create([
            'categoria_id'=>null,
            'codigo'=>'1',
            'nombre'=>'Lente',
            'descripcion'=>'descripcion',
            'costo'=>100,
            'precio'=>330,
            'precio_minimo'=>330,
            'min_cilindrico'=>0,
            'max_cilindrico'=>0,
            'min_esferico'=>0,
            'max_esferico'=>0,
            'base_min'=>0,
            'base_max'=>0,
            'adicion_min'=>0,
            'adicion_max'=>0,
            'iva'=>10,
            'tipo'=>1
        ]);
    }
}
