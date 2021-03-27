<?php

namespace Database\Factories;

use App\Models\Curso;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CursoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Curso::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        return [
            //definicion de todos los campos de la tabla
            'name' => $name,/* llena el campo nombre con una oracion */
            'slug' => Str::slug($name, '-'),/* a cada espacio entre palabra le agregua un guion */
            'descripcion' => $this->faker->paragraph(),/* llena el campo con parrafo */
            'categoria' => $this->faker->randomElement(['Desarrollo web', 'Diseño web'])
        ];
    }
}
