<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'rut' => '12.345.678-9',
            'nombre' => 'Administrador',
            'apellido' => 'Principal',
            'email' => 'admin@ventasfix.cl',
            'rol' => 'admin',
            'password' => Hash::make('Admin12345'),
        ]);

        User::create([
            'rut' => '9.876.543-2',
            'nombre' => 'Administrador',
            'apellido' => 'Secundario',
            'email' => 'admin2@ventasfix.cl',
            'rol' => 'admin',
            'password' => Hash::make('Admin12345'),
        ]);
    }
}