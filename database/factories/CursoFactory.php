<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Curso;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> $this->faker->sentence() ,
            'descripcion'=> $this->faker->paragraph(),
            'slug'=> $this->faker->slug(),
            'categoria'=> $this->faker->randomElement(['Desarrollo web', 'Diseño web']) 
        ];
    }
}
