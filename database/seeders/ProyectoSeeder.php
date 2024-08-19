<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Proyecto;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Proyecto::truncate();

        $proyectos = [
            [
                'titulo' => 'NVN Webdesing', 
                'descripcion' => 'Landing page de un estudio de Diseño Web',
                'url' => 'https://nvnwebdesing.com',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1712836772/portfolio/estudioCasa_dgszsj.png',
                'github' => 'https://github.com/mlmh3113/nvnwebdesing.git',
                'tecnologias' => json_encode(['Laravel', 'Vue.js', 'Tailwind', 'PHP', 'MySQL', 'Git', 'Inertia'])
            ]
        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }

    }
}
