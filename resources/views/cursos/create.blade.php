@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
  <h1>En esta pagina podras crear un curso</h1>
  <form action="{{route('cursos.store')}}" method="post">
    @csrf
    <label>
      Nombre: <br>
      <input type="text" name="name" class="border-2">
    </label><br>
  
    <label>
      Descripcion: <br>
      <textarea name="descripcion" rows="5" class="border-2"></textarea>
    </label><br>
  
    <label>
      Categoria: <br>
      <input type="text" name="categoria" class="border-2">
    </label><br>

    <button type="submit">Guardar curso</button>
  </form>
@endsection
