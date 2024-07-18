@extends('layouts.app')

@section('titulo', 'Detalles Operador')

@section('contenido')

<div class="text-center">
    <img style="height: 400px; width:500px; margin:20px" src="{{ Storage::url($caso->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
    <div class="card-body">
        <p class="card-text">nombre: {{$caso->nombre}}</p>
        <p class="card-text">identificacion: {{$caso->identificacion}}</p>
        <p class="card-text">codigo: {{$caso->codigo}}</p>
        <p class="card-text">cargo: {{$caso->cargo}}</p>
    </div>
    <br>
    <a href="/operacion/{{$caso->id}}/edit" class="btn btn-warning">Editar operador</a>
    {{-- <a href="/cursos/{{$cursito->id}}/edit" class="btn btn-dark">Editar curso</a> --}}
</div>

@endsection
