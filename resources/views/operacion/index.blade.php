@extends('layouts.app')

@section('titulo', 'Listado de operadores')

@section('contenido')

<br>
<h3 class="tex-center">Lista de operadores</h3>
<br>
<div class="row">
@foreach ($caso as $casito)
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img style="height: 200px; width:250px; margin:20px" src="{{ Storage::url($casito->imagen) }}" class="card-img-top mx-auto d-block" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $casito->nombre }}</h5>
              <p class="card-text">{{ $casito->identificacion }}</p>
              <p class="card-text">{{ $casito->codigo }}</p>
              <p class="card-text">{{ $casito->cargo }}</p>
              <a href="/operacion/{{$casito->id}}" class="btn btn-success">Ver mas informacion</a>
            </div>
          </div>
    </div>
@endforeach
</div>

@endsection
