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

        /* reglas de validacion de formulario */
        $request->validate([
            /* nombres de los input con regla de validacion */
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save();

        return redirect()->route('cursos.show', $curso);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

         /* reglas de validacion de formulario */
         $request->validate([
            /* nombres de los input con regla de validacion */
            'name' => 'required|max:10',/* campo requerido con maximo de 10 caracteres */
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save();
        return redirect()->route('cursos.show', $curso);
    }
}
