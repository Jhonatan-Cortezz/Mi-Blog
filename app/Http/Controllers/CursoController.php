<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

// importo la clase para la validacion de formulario
use App\Http\Requests\StoreCurso;

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

    public function store(StoreCurso $request){

        /* $curso = new Curso();
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;

        $curso->save(); */

        // ASIGNACION MASIVA
        // esto permite reducir el codigo y se envian todos los campos del formulario a la bd
        $curso = Curso::create($request->all());

        return redirect()->route('cursos.show', $curso);
    }

    public function edit(Curso $curso){
        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){

        /* $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        
        $curso->save(); */
        $curso->update($request->all());
        return redirect()->route('cursos.show', $curso);
    }

    public function destroy(Curso $curso){
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}
