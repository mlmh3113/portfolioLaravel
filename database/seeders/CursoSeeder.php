<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Curso::truncate();

        $cursos = [
            [
                'institucion' => 'Univ. de Lanus',
                'nombre' => 'Licenciatura en Sistemas',
                'anio' => 'Cursando'
            ],
            [
                'institucion' => 'UTN',
                'nombre' => 'Desarrollo Web Full Stack',
                'anio' => 2022
            ],
            [
                'institucion' => 'Coderhouse',
                'nombre' => 'Python Developer',
                'anio' => '2022'
            ],
            [
                'institucion' => 'Coderhouse',
                'nombre' => 'SQL',
                'anio' => '2022'
            ],
            [
                'institucion' => 'Codo a Codo',
                'nombre' => 'Full Stack Developer',
                'anio' => '2021'
            ]
        ];

        foreach ($cursos as $curso) {
            Curso::create($curso);
        }
    }
}
