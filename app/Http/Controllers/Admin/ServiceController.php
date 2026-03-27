<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //$service =  Service::with('category')->get();

        //usamos paginación
        $service = Service::with('category')->paginate(10);

        return view('services.Admin.list', ['services' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        return view('services.Admin.Add', [
            'categories' => $categories
        ]);
        //return "Vamos a crear";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request)
    {
        //return $request;

            $data = $request->validated();
            $data['active'] = 1;

            Service::create($data);
                
        session()->flash('status','Se ha creado el servicio');

        return to_route('services.Admin.list');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        $categories = Category::all();

        return view('services.Admin.edit', [
            'service' => $service,     // ⚠️ Aquí es clave
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        $data = $request->validated();

        // Manejar checkbox
        $data['active'] = $request->has('active') ? 1 : 0;

        $service->update($data);

        session()->flash('status','Servicio actualizado');

        return to_route('services.Admin.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
