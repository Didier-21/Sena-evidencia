@extends('layouts.app')

@section('titulo', 'Crear caso')

@section('contenido')

<br>
<h2>Agregar operador </h2>
<form action="/operacion" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nombre del operador </label>
        <input type="string" class="form-control" id="nombre" name="nombre">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Identificacion</label>
        <input type="integer" class="form-control" id="identificacion" name="identificacion">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">codigo</label>
        <input type="integer" class="form-control" id="codigo" name="codigo">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Cargo </label>
        <input type="string" class="form-control" id="cargo" name="cargo">
      </div>
      <br>
      <button type="submit" class="btn btn-success">Guardar</button>
</form>
@endsection
