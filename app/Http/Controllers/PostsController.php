<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $post = Post::all();
        return view('home')->with(compact('post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');        // en esta vista está el form de creación de post
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post;                       // instancio un objeto Post
       
        $post->title = $request->title;
		$movie->rating = $request->rating;
		$movie->awards = $request->awards;
		$movie->genre_id = $request->genre_id;
		$movie->release_date = $request->release_date;

		// Necesito el archivo en una variable esta vez
		$file = $request->file("poster");

		// Nombre final de la imagen
		$finalName = strtolower(str_replace(" ", "_", $request->input("title")));

		// Armo un nombre único para este archivo
		$name = $finalName . uniqid('_image_') . "." . $file->extension();

		// Guardo el archivo en la carpeta
		$file->storePubliclyAs("public/posters", $name);

		// Guardo en base de datos el nombre de la imagen
		$movie->poster = $name;
		$movie->save();

        return redirect('home')->with(compact('post'));  // redirijo a Home, donde están todos los posts

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return redirect('posts.viewPost')->with(compact('post'));  // redirijo a la vista del id del post en particular.

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);        //busco el post que quiero modificar

        return view('posts.editPost')->with(compact('post'));  //llevo a la vista de edit, pero voy a modificar los datos recien con la función de update
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);

        $post->content = $request->input('content'); //voy a capturar lo que el usuario haya cargado en el campo "content"
                                                    // VER SI HAY MAS CAMPOS QUE CAPTURAR!!!
        $post->save();

        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();

        return redirect('posts.profile');
    }
}
