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
                'titulo' => 'NVN Web Desing', 
                'descripcion' => 'Landing page de un estudio de Diseño Web',
                'url' => 'https://nvnwebdesing.com',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1724169848/portfolio/nvnwebdesing_edmuks.jpg',
                'github' => 'https://github.com/mlmh3113/nvnwebdesing.git',
                'tecnologias' => json_encode(['Laravel', 'Vue.js', 'Tailwind', 'PHP', 'MySQL', 'Git', 'Inertia'])
            ],

            [
                'titulo' => 'Estudio Casa', 
                'descripcion' => 'Pagina Web diseñada para empreasa de Construcciones',
                'url' => 'https://estudiocasa.nvnwebdesing.com/',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1712836772/portfolio/estudioCasa_dgszsj.png',
                'github' => 'https://github.com/mlmh3113/estudioCasaLaravel.git',
                'tecnologias' => json_encode(['Laravel', 'Vue.js', 'Tailwind', 'PHP', 'MySQL', 'Git', 'Inertia'])
            ],

            [
                'titulo' => 'Live Seguros', 
                'descripcion' => 'Pagina Web creada para una compania de Seguros',
                'url' => 'https://lifeseguros.nvnwebdesing.com/',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1710486439/portfolio/liveSeguros_hkzkir.png',  
                'github' => 'https://github.com/mlmh3113/LifeSeguros.git',
                'tecnologias' => json_encode(['Laravel', 'Vue.js', 'Tailwind', 'PHP', 'MySQL', 'Git', 'Inertia'])
            ],

            [
                'titulo' => 'Tejidos Yami (En proceso)', 
                'descripcion' => 'Pagina Web desarrollada para mini emprendimiento de Tejidos',
                'url' => 'https://casacumbres.nvnwebdesing.com/',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1724640250/TejidosYami/img_05_kedxet.jpg',
                'github' => 'https://github.com/mlmh3113/CasaCumbres.git',
                'tecnologias' => json_encode(['Laravel', 'Vue.js', 'Tailwind', 'PHP', 'MySQL', 'Git', 'Inertia'])
            ],

            [
                'titulo' => 'Api Blog',
                'descripcion' => 'Api desarrollada con Python y Django Rest Framework. Se realizo el deploy en PythonAnyWhere.',
                'url' => 'http://martinh3113.pythonanywhere.com/posts/',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1705064710/portfolio/blogApi_Python_tcrdnz.png',
                'github' => 'https://github.com/mlmh3113/drfpython.git',
                'tecnologias' => json_encode(["Python","Django"])

            ],

            [
                'titulo' => 'Get Fit', 
                'descripcion' => 'Desarrollo Full-stack orientado a la gestión de una página de ejercicios de fitness',
                'url' => 'https://personal-fit-front.vercel.app/',
                'imagen' => 'https://res.cloudinary.com/dkoocayxp/image/upload/v1710496088/portfolio/getFit_atmux0.png',
                'github' => 'https://github.com/mlmh3113/personal-fit-back.git',
                'tecnologias' => json_encode(["Vue.js","Tailwind","Node.js","MongoDB","Pinia","JavaScript"])
            ],

        ];

        foreach ($proyectos as $proyecto) {
            Proyecto::create($proyecto);
        }

    }
}
