<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        // ya no necesito el CursoSeeder por que hago uso del factorie
        Curso::factory(50)->create();

        // para la tabla usuario
        User::factory(10)->create();
    }
}
