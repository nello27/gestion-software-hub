<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceRequest;
use App\Models\Service;
use App\Http\Requests\ServiceRequestRequest;

class ServicesRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = ServiceRequest::with('service')->paginate(10);

        return view('request.Admin.list', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    // 1. Método Edit
    public function edit(ServiceRequest $service_request) // <-- Nombre idéntico a la ruta
    {
        $categories = Service::all();

        return view('request.Admin.edit', [
            'service_request' => $service_request,
            'categories' => $categories
        ]);
    }

    // 2. Método Update
    public function update(ServiceRequestRequest $request, ServiceRequest $service_request) // <-- Magia activa automáticamente
    {
        // Al usar 'ServiceRequest', Laravel ahora sí entiende la relación con {service_request} en la ruta
        $service_request->update($request->validated());

        session()->flash('status', 'Servicio actualizado');

        return to_route('request.Admin.list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
