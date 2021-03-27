@extends('layouts.plantilla')

@section('title', 'Crear Curso')

@section('content')
  <h1>En esta pagina podras crear un curso</h1>
  <form action="{{route('cursos.store')}}" method="post">
    @csrf
    <label>
      Nombre: <br>
      <input type="text" name="name" class="border-2" value="{{old('name')}}">
    </label>
    {{-- esta directiva obtiene el error de la validavion --}}
    @error('name')
      <br>
        <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
  
    <label>
      Descripcion: <br>
      <textarea name="descripcion" rows="5" class="border-2">{{old('descripcion')}}</textarea>
    </label>
    @error('descripcion')
      <br>
        <small>*{{$message}}</small>
      <br>
    @enderror
    <br>
  
    <label>
      Categoria: <br>
      <input type="text" name="categoria" class="border-2" value="{{old('categoria')}}">
    </label>
    @error('categoria')
      <br>
        <small>*{{$message}}</small>
      <br>
    @enderror
    <br>

    <button type="submit">Guardar curso</button>
  </form>
@endsection
