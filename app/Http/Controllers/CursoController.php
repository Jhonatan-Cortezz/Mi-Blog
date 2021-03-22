<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    //este controlador administrara 3 rutas
    public function index(){
        // recuperar cursos de la base de datos
        /* $cursos = Curso::all(); *//* esta simple instruccion me trae todo los registros de la bd */
        $cursos = Curso::orderBy('id', 'desc')->paginate();/* esta otra instruccion me trae los registros con paginacion uff */
        return view('cursos.index', compact('cursos'));/* compact pasa todos los registros a la vista */
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        /* recuperar registro po id */
        $curso = Curso::find($id);
        return view('cursos.show', compact('curso'));/* el array es para pasar la variable a la vista */
    }

    public function store(Request $request){
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }
}
