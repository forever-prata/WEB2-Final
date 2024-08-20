<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Administrador',
                'email' => 'admin@gmail',
                'password' => bcrypt('admin123'),
                'tipoUsuario' => 1,
            ],
            [
                'name' => 'cliente',
                'email' => 'cliente@gmail',
                'password' => bcrypt('cliente123'),
                'tipoUsuario' => 2,
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
