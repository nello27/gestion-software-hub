<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #return "lista de categorias";
        $categories = Category::all();
        return view('categories.Admin.list', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('categories.Admin.add', [
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        // 1. Tomamos los datos que YA fueron validados automáticamente por tu CategoryRequest
        $data = $request->validated();

        // 2. Agregamos el campo por defecto
        $data['active'] = 1;

        // 3. Creamos la categoría en la base de datos
        Category::create($data);

        // 4. Guardamos el mensaje de éxito en la sesión
        session()->flash('status', 'Se ha creado la categoría con éxito.');

        // 5. REDIRECCIÓN (Evita duplicados al presionar F5)
        return to_route('categories.Admin.list'); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        $categories = Category::all();
        return view('categories.Admin.edit', [
            'category' => $category,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $data = $request->validated();

        $category->update($data);

        session()->flash('status','Se ha actualizado la categoria');

        return to_route('categories.Admin.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $categoryname = $category->name; //  aquí obtenemos el nombre de la categoría

        $category->delete();

        session()->flash('status', "Se eliminó la categoría: $categoryname");

        return to_route('categories.Admin.list');

    }
}
