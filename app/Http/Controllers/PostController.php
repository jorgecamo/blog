<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\Usuario;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post = Post::paginate(5);
        $postord = $post->sortBy('titulo');
        return view('posts/index', compact('post','postord'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $usuarios = Usuario::get(); //para cargar los autores en el desplegable
        return view('posts/create',compact('usuarios'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $post = new Post();
        $post->titulo = $request->get('titulo');
        $post->contenido = $request->get('contenido');
        $post->id_usuario = $request->get('id_usuario');
        $post->save();
        return redirect()->route('posts.index'); //Redireccionar al listado.
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        if (!is_numeric($id) || intval($id) != $id) {
            abort(404, 'ID no válido');
        }
            $id = intval($id);
            $postparaver = Post::findOrFail($id);
        return view('posts/show' , compact('postparaver'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect()->route('posts.index');
    }
}
