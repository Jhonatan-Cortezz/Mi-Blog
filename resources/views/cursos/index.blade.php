@extends('layouts.plantilla')

@section('title', 'Mis Cursos')

@section('content')
  <h1>Bienvenido a la pagina cursos</h1>
  <div class="m-4">
    <a href="{{route('cursos.create')}}" class="p-2 bg-blue-300 text-white">Crear Curso</a>
  </div>
  <ul>
    {{-- aca imprimo los datos provenientes del controlador --}}
    @foreach ($cursos as $curso)
        <li>
          <a href="{{route('cursos.show', $curso->id)}}">{{$curso->name}}</a>
        </li>
    @endforeach
  </ul>

  {{-- esto es simple para hacer la paginacion --}}
  {{$cursos->links()}}
@endsection
