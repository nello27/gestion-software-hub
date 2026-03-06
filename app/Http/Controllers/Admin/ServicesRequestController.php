<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service_Request;
use App\Models\Service;

class ServicesRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service_Request::with('service')->paginate(10);

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
    public function edit(Service_Request $service)
    {
        $categories = Service::all();

        return view('request.Admin.edit', [
            'service' => $service,     // ⚠️ Aquí es clave
            'categories' => $categories
        ]);
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
