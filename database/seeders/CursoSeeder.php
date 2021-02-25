<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();
            # code...
        $curso->name = "Laravel";
        $curso->descripcion = "Framework de PHP";
        $curso->categoria = "Desarrollo web";
        $curso->save();

        $curso2 = new Curso();
            # code...
        $curso2->name = "Laravel";
        $curso2->descripcion = "Framework de PHP";
        $curso2->categoria = "Desarrollo web";
        $curso2->save();

        $curso3 = new Curso();
            # code...
        $curso3->name = "Laravel";
        $curso3->descripcion = "Framework de PHP";
        $curso3->categoria = "Desarrollo web";
        $curso3->save();
    }
}
