@extends('layouts.app')

@section('titulo', 'Editar caso')

@section('contenido')
<br>
<h3 class="text-center">Editar información del operador</h3>
{{--se utiliza el atributo enctype para poder subir archivos--}}
<form action="/operacion/{{$caso->id}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="nombreoperador">Modifique el Nombre del operador</label>
        <input name="nombre" id="nombreoperador" value="{{$caso->nombre}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="identificacion">Modifique la identificacion del operador </label> {{--uso el value--}}
        <input name="identificacion" id="identificacion" value="{{$caso->identificacion}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="codigo">Modifique el codigo del operador </label> {{--uso el value--}}
        <input name="codigo" id="codigo" value="{{$caso->codigo}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="cargo">Modifique el cargo del operador </label> {{--uso el value--}}
        <input name="cargo" id="cargo" value="{{$caso->cargo}}" type="text" class="form-control">
    </div>
    <div class="mb-3">
        <label for="imagen">Cargar nueva imagen</label>
        <br>
        <input name="imagen" id="imagen" type="file">
    </div>
    <br>
    <button type="submit" class="btn btn-success">Actualizar informacion </button>
</form>

@endsection
