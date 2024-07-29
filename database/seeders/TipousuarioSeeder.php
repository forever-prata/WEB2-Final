<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tipousuario;

class TipousuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tiposUsuarios = Tipousuario::factory()->make()->toArray();

        foreach ($tiposUsuarios as $tipoUsuario) {
            Tipousuario::create($tipoUsuario);
        }
    }
}
