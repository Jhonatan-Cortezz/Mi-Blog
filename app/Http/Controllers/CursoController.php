<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoController extends Controller
{
    //este controlador administrara 3 rutas
    public function index(){
        return view('cursos.index');
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($curso){
        return view('cursos.show', ['curso' => $curso]);/* el array es para pasar la variable a la vista */
    }
}
