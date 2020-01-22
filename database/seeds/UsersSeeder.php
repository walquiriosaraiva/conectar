<?php

use Illuminate\Database\Seeder;
    use App\User;

class UsersSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'Administrador',
            'password' => bcrypt('admin'),
            'email' => 'administrador@gmail.com',
            'perfil' => 1
        ]);

        User::create([
            'name' => 'Doador',
            'password' => bcrypt('doador'),
            'email' => 'doador@gmail.com',
            'perfil' => 2
        ]);

        User::create([
            'name' => 'Beneficiário',
            'password' => bcrypt('beneficiario'),
            'email' => 'beneficiario@gmail.com',
            'perfil' => 3
        ]);
    }
}