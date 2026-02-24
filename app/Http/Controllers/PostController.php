<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /*$posts = [
            ['title' => 'Primer titulo', 'description' => 'Descripción del primer post'],
            ['title' => 'Segundo titulo', 'description' => 'Descripción del segundo post'],
            ['title' => 'Tercer titulo'], // Sin descripción
            ['title' => 'Cuarto titulo', 'description' => 'Descripción del cuarto post'],
        ];*/

        $posts = Post::get();

        return view('posts.index', ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "Estais en el create";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //$result = Post::findOrFail($id);
        //return $post;


        return view('posts.show', ['post' => $post]);

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
        //
    }
}
