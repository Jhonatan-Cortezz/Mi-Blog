@extends('layouts.plantilla')

@section('title', 'Editar Curso')

@section('content')
  <h1>En esta pagina podras editar un curso</h1>
  <form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf
    {{-- esta directiva le indica a laravel que el metodo sera put --}}
    @method('put')
    <label>
      Nombre: <br>
      <input type="text" name="name" class="border-2" value="{{$curso->name}}">
    </label><br>
  
    <label>
      Descripcion: <br>
      <textarea name="descripcion" rows="5" class="border-2">{{$curso->descripcion}}</textarea>
    </label><br>
  
    <label>
      Categoria: <br>
      <input type="text" name="categoria" class="border-2" value="{{$curso->categoria}}">
    </label><br>

    <button type="submit">Editar curso</button>
  </form>
@endsection
