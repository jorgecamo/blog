@extends('plantilla')
@section('titulo', 'Listado de posts')
@section('contenido')
<h1>Nuevo Posts</h1>
<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <div class="row mb-3">
        <div class="form-group">
            <label for="usuario">Usuario:</label>
            <select class="form-control" name="id_usuario" id="usuario">
                @foreach ($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->login }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="titulo">Titulo:</label>
            <input type="text" class="form-control" name="titulo" id="titulo">
        </div>
        <div class="form-group">
            <label for="contenido">Contenido:</label>
            <input type="text" class="form-control" name="contenido" id="contenido">
        </div>
        <br><br><br>
        <div  width="60%">
            <input type="submit" name="enviar" value="Enviar" class="btn btn-primary " >
            <a class="btn btn-primary" href="{{ route('posts.index' )}}" >Volver al listado</a>
        </div>


    </div>
</form>

@endsection