@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
  <h1>Bienvenido al curso de: {{$curso->name}}</h1>
  <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
  <p>{{$curso->descripcion}}</p>
  <div class="m-4">
    <a href="{{route('cursos.index')}}" class="p-2 bg-blue-300 text-white">Volver</a>
  </div>
@endsection