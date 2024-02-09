@extends('plantilla')
@section('titulo', 'ficha posts')

@section('contenido')
<h1>Listado de posts  {{$postparaver->usuarios->login}}</h1>
<table class="table table-striped">
<tr>
    <th>TITULO</th>
    <th>CONTENIDO</th>
    <th>FECHA DE CREACION</th>
</tr>
<tr>
    <td>{{ $postparaver["titulo"] }}</td>
    <td>{{ $postparaver["contenido"] }}</td>
    <td>{{ $postparaver["created_at"] }}</td>
</tr>
</div>
</table>
<td>
        <a class="btn btn-primary" href="{{ route('posts.index') }}">Volver Atras</a>
</td>
@endsection