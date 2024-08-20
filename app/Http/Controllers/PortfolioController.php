<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Proyecto;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PortfolioController extends Controller
{

    public function index()
    {
        $cursos = Curso::all();
        $proyectos = Proyecto::all();
        return Inertia::render('Index', compact('cursos', 'proyectos'));
    }

    public function pdfDownload()
    {

        return response()->download(public_path('MartinLeandroMartinezCVDEV.pdf'));
    }
    
}
