@extends('plantilla')
@section('titulo', 'Listado de posts')
@section('contenido')
<h1>Listado de posts</h1>
<table class="table table-striped">
<tr>
    <th>TITULO</th>
    <th>VER</th>
    <th>BORRAR</th>
</tr>
@forelse ($postord as $puest)
<tr>
    <td>{{ $puest["titulo"] }} ({{$puest->usuarios->login}})</td>
    <td>
        <a class="btn btn-primary" href="{{ route('posts.show',$puest) }}">VER</a>
    </td>
    <td>
        <form action="{{ route('posts.destroy',$puest['id'])}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-primary" value="Borrar">
        </form>
    </td>
</tr>
</div>
@empty
<p>No se encontraron posts</p>
@endforelse
</table>
{{ $post->links() }}
@endsection